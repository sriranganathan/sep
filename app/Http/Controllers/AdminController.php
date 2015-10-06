<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\registration as Registration;
use Mail;
use Excel;

class AdminController extends Controller
{
    public function view()
    {
        $registrations = registration::paginate(50);
        $ugregcount = Registration::where('degree','UG')->where('email_sent',1)->count();
        $pgregcount = Registration::where('degree','PG')->where('email_sent',1)->count();
        $totalugregcount = Registration::where('degree','UG')->count();
        $totalpgregcount = Registration::where('degree','PG')->count();
        return view('view', compact('registrations', 'ugregcount', 'pgregcount', 'totalugregcount', 'totalpgregcount'));
    }

    public function show_registration(Request $request)
    {
        $id = $request->get('id');

        $registration = Registration::find($id);

        echo(json_encode($registration));   
    }
    public function login()
    {
        if(Session::has('user_name'))
            return Redirect::to('/view_registration');
        else
            return view('login');
    }
    public function check_login(Request $request)
    {
            $username=$request->get('username'); 
            $password=$request->get('password');
            $password = sha1($password);
            $result = DB::select('select * from admin where admin_handle = ? and admin_password = ?', [$username,$password]);
            
            if(count($result)>0)
            {
                Session::put('user_name',$result[0]->admin_name);
                return Redirect::to('/view_registration');
            }
            else
            {
                return Redirect::to('login')->with('message', 'Incorrect Username or Password');
            }
    }

    public function logout()
    {
        Session::flush();
       return Redirect::to('/view_registration');
    }

    public function email(Request $request)
    {
        $id = $request->get('id');
        $registration = Registration::find($id);

        Mail::send('email', ['registrant' => $registration->name , 'id' => $id], function ($m) use ($registration) {
            $m->to($registration->email,$registration->name)
              ->replyTo('marcon@nitt.edu','MURUGANANTHAM')
              ->subject('Confirmation of Participation for the SEP - NIT Trichy');
        });

        $registration->email_sent = true;
        $registration->save();
    }

    public function test_email()
    {

        Mail::send('email', ['registrant' => 'MURUGANANTHAM' , 'id' => '8888'], function ($m) {
            $m->to('107112101@nitt.edu','MURUGANANTHAM')
              ->replyTo('marcon@nitt.edu','MURUGANANTHAM')
              ->subject('Confirmation of Participation for the SEP - NIT Trichy');
        });
    }

    public function excel()
    {
        $registration = Registration::all();
        Excel::create('Registrations', function($excel) use ($registration) {
            
            $excel->sheet('List of Registrants', function($sheet) use ($registration) {
                $sheet->fromModel($registration, null, 'A1', false, false);
                $sheet->prependRow(1, array('ID','Reg_ID','Name','Gender','Degree','Course','Year','Department',
                                            'College with Address','Email ID','Contanct No.','Guardian\'s contanct No.',
                                            'Amount','DD No.','DD Date','Bank Name','Reason','is NITT','Email Sent'));
                $sheet->freezePane('C2');
                $sheet->getColumnDimension('A')
                      ->setVisible(false);
                $sheet->getColumnDimension('R')
                      ->setVisible(false);
                $sheet->getColumnDimension('S')
                      ->setVisible(false);
            });
        })->export('xlsx');

    }
}
