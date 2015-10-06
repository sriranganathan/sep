@extends('base')

@section('title')
    View Registration
@stop
@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset('css/pagination.css')}}"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
     .download
     {
         margin-top:10px;
     }
    </style>
@stop
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Areas of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
    <li><a href="/logout" class=" waves-effect waves-light">Logout</a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Areas of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
    <li><a href="/logout">Logout</a></li>
@stop
@section('content')
    <p align="right"><a class="waves-effect waves-light btn blue download" href = "{{action('AdminController@excel')}}">Download as Excel</a></p>
    <table style="width:30%">
        <tr>
            <td>
                Total UG
            </td>
            <td>
                {{$totalugregcount}}
            </td>
            <td>
                Registered UG
            </td>
            <td>
                {{$ugregcount}}
            </td>
        </tr>
        <tr>
            <td>
                Total PG
            </td>
            <td>
                {{$totalpgregcount}}
            </td>
            <td>
                Registered PG
            </td>
            <td>
                {{$pgregcount}}
            </td>
        </tr>
    </table>
    <table id="registration_list" class="striped bordered">
        <thead>
            <tr>
                <th data-field="id">Reg_id</th>
                <th data-field="name">Name</th>
                <th data-field="degree">Degree</th>
                <th data-field="email_sent">Email Sent</th>
            </tr>
        </thead>

        <tbody>
            @foreach($registrations as $registration)
         	<tr id="{{$registration->id}}">
                    <td>{{$registration->reg_id}}</td>
                    <td>{{$registration->name}}</td>
                    <td>{{$registration->degree}}</td>
                    <td class="email_sent_field">
                        @if($registration->email_sent == 1)
                            ✔
                        @else
                            ✗
                        @endif
                    </td>
                </tr>
	    @endforeach
        </tbody>
    </table>
    {!! $registrations->render() !!}
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Registration details</h4>
            <p id="reg_id"></p>
            <p id="name"></p>
            <p id="gender"></p>
            <p id="degree"></p>
            <p id="course"></p>
            <p id="year"></p>
            <p id="dept"></p>
            <p id="college"></p>
            <p id="email"></p>
            <p id="mobile"></p>
            <p id="guardian_mobile"></p>
            <p id="amount"></p>
            <p id="dd_no"></p>
            <p id="dd_date"></p>
            <p id="bank_name"></p>
            <p id="reason"></p>

        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
            <button class="waves-effect waves-light btn id_for_email">Send Email</button>
        </div>
    </div>
@stop
@section('javascript')
    $(document).ready(function(){
    $('#registration_list > tbody > tr').css('cursor','pointer');
    $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

    $('#registration_list > tbody > tr').click(function(){
    var id = this.id;
    $.ajax({
    method: "POST",
    url: base_url+"/show_registration",
    data: { id :id }
    }).done(function( msg ) {
    modalInject($.parseJSON(msg));
    });
    
    });

    $('.id_for_email').click(function(){
    var id = this.id;
    $.ajax({
    method: "POST",
    url: base_url+"/email",
    data: {id :id }
    }).done(function( msg ) {
    alert("E-Mail Sent");
    $("#"+id+" .email_sent_field").html('✔');
    });
    
    });


    });


    function modalInject(json)
    {
    $('#reg_id').html("<strong>REGISTRATION ID</strong> : "+json.reg_id);
    $('#name').html("<strong>NAME : </strong>"+json.name);
    $('#gender').html("<strong>Gender : </strong>"+json.gender);
    $('#degree').html("<strong>Degree : </strong>"+json.degree);
    $('#course').html("<strong>Course : </strong>"+json.course);
    $('#year').html("<strong>Year : </strong>"+json.year);
    $('#college').html("<strong>College : </strong>"+json.college_address);
    $('#email').html("<strong>Email : </strong>"+json.email);
    $('#mobile').html("<strong>Mobile no : </strong>"+json.mobile_no);
    $('#guardian_mobile').html("<strong>Guardian Mobile No : </strong>"+json.guardian_mobile_no);
    $('#amount').html("<strong>Amount : </strong>"+json.amount);
    $('#dd_no').html("<strong>DD No : </strong>"+json.dd_no);
    $('#dd_date').html("<strong>DD Date : </strong>"+json.dd_date);
    $('#bank_name').html("<strong>Bank Name : </strong>"+json.bank_name);
    $('#reason').html("<strong>Reason : </strong>"+json.reason);
    $('.id_for_email').attr('id',json.id);
    $('#modal1').openModal();
    }

@stop
