@extends('base')

@section('title')
Login
@stop
@section('css')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@stop
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Area Of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop


@section('content')
<div class="row">
<div class=" card col m6 offset-m3">
 <form method="post">
	  {!! csrf_field() !!}
	   <div class="row">
	    <div class="input-field col s12">
        <i class="material-icons prefix  blue-text ">account_circle</i>
        <input id="roll" type="text" class="validate" name="roll" required maxlength="9" minlength="9">
        <label for="roll">Roll Number</label>
      </div>
	   </div>
	  <div class="row">
        <div class="input-field col s4 offset-s4">
	        <button class="btn waves-effect waves-light blue" type="submit" >login
            </button>
	    </div>
    </div>
    @if(Session::has('message'))
      <div class="red-text">{{Session('message')}}</div>
    @endif
</form>
</div>
</div>
@stop