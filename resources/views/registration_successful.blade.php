@extends('base')

@section('title')
Registration
@stop
@section('css')
<meta http-equiv="refresh" content="0;url=/registration/download"/>
@stop
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Areas of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li class="active"><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Areas of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li class="active"><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop


@section('content')
<div class="row">
<div class=" card col m6 offset-m3">
    <h5>You have successfully submitted your details</h5>
    <p>Your Pdf should download Automatically. If not <a href="/registration/download">Click Here</a></p>
</div>
</div>
@stop
