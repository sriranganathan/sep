@extends('base')

@section('title')
    Registration
@stop

@section('css')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
 label[data-error]:after {
     white-space: nowrap;
 }
</style>
@stop

@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li class="active"><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Area Of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li class="active"><a href="/registration/show">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop
@section('content')
    
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">Register for the Programme</span>
                    <p>
                    The registration fee should be paid through a DD in favour of  “The Director, NIT, Trichy” taken from any Nationalsed bank.

                    The registration fee is inclusive of programme kit, refreshments and lunch. Selection of the applicant is based on First Come First Serve basis.

                    Kindly apply at the earliest.

                    Please have the details of your DD while registering.
                    </p>
                    
                    <ul>
                        <li class="collection-item">
                            For UG Students: Rs 800 + 20 % institute overheads, including service tax = Rs 960/-
                        </li>
                        <li class="collection-item">
                            For PG Students: Rs 1300 + 20 % institute overheads, including service tax = Rs 1560/-
                        </li>
                    </ul>
                
                </div>
                <div class="card-action">
                    <div class="row">
                        
                        <a class="white-text center-align" href="{{url('/registration/nitt')}}">
                            <div class="col s12 m4 offset-m1 waves-effect eaves-light btn blue center-align">
                                <center>
                                    NIT-T Students
                                </center>
                            </div>
                        </a>
                            
                        <a class="white-text center-align" href="{{url('/registration/form')}}">
                            <div class="col s12 m4 offset-m2 waves-effect eaves-light btn blue center-align">
                                <center>
                                    Other Students
                                </center>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop