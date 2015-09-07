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
    <li class="active"><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop
@section('content')
    <div class="row card">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="red-text">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 
        <center><h5>Register for the Programme</h5></center>
        <form class="col s12" method="post">
            {!! csrf_field() !!}
            <div class="row">
                <div class="input-field col s12 m8 ">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" type="text" name="name" value="{{old('name')}}" class="validate" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                    <label for="name" data-error="Alphabets Only">Name</label>
                </div>

                <div class="input-field col s12 m4 ">
                    <div class="row">
                        <div class="col s4 m2" style ="margin-top:12px">
                            Gender
                        </div>
                        <div class="col s4 m2">
                            <input name="gender" type="radio" value="male" id="male" @if(strcmp(old('gender'),"male")==0) checked @endif required/>
                            <label for="male">Male</label>
                        </div>
                        <div class="col s4 m2 offset-m1">
                            <input name="gender" type="radio" value="female" @if(strcmp(old('gender'),"female")==0) checked @endif id="female"/>
                            <label for="female">Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col s12 m4 ">
                    <div class="col s1"><i class="material-icons prefix">school</i></div>
                    <div class="input-field col s11" id="degreediv">
                        <select id="degree" required name="degree">
                            <option value="" disabled selected>Choose your Degree</option>
                            <option value="UG" @if(strcmp(old('degree'),"UG")==0) selected @endif @if(Session::has('degree')&&strcmp(Session::get('degree'),"UG")==0) selected @endif>UG</option>
                            <option value="PG" @if(strcmp(old('degree'),"PG")==0) selected @endif @if(Session::has('degree')&&strcmp(Session::get('degree'),"PG")==0) selected @endif>PG</option>
                        </select>
                        <label>Degree</label>
                    </div>
                </div>
                <div class="col s12 m4" id="course_div">
                    <div class="col s1"><i class="material-icons prefix">book</i></div>
                    <div class="input-field col s11">
                        <select id="course" required name="course" style="overflow:scroll">
                            <option value="" disabled selected>Choose your Course</option>
                            <option value="B.E" @if(strcmp(old('course'),"B.E")==0) selected @endif>B.E</option>
                            <option value="B.Tech" @if(strcmp(old('course'),"B.Tech")==0) selected @endif @if(Session::has('course')&&strcmp(Session::get('course'),"B.Tech")==0) selected @endif>B.tech</option>
                            <option value="B.Sc" @if(strcmp(old('course'),"B.Sc")==0) selected @endif>B.Sc</option>
                            <option value="B.A" @if(strcmp(old('course'),"B.A")==0) selected @endif>B.A</option>
                            <option value="B.Com" @if(strcmp(old('course'),"B.Com")==0) selected @endif>B.com</option>
                            <option value="M.Tech" @if(strcmp(old('course'),"M.Tech")==0) selected @endif @if(Session::has('course')&&strcmp(Session::get('course'),"M.Tech")==0) selected @endif>M.tech</option>
                            <option value="M.Sc" @if(strcmp(old('course'),"M.Sc")==0) selected @endif>M.Sc</option>
                            <option value="M.B.A" @if(strcmp(old('course'),"M.B.A")==0) selected @endif @if(Session::has('course')&&strcmp(Session::get('course'),"M.B.A")==0) selected @endif>M.B.A</option>
                            <option value="other"@if(strcmp(old('course'),"other")==0) selected @endif>Others</option>
                        </select>
                        <label>Course</label>
                    </div>
                </div>
                
                <div class="input-field col s11 m4 " id="other_course_div" style="display:none">
                     <i class="material-icons prefix">book</i>
                     <input type="text" id="other_course" name="other_course" value="{{old('other_course')}}">
                     <label for="other_course">Please Specify Your Course</label>
                </div>
                
                <div class="col s12 m4">
                    <div class="col s1"><i class="material-icons prefix">today</i></div>
                    <div class="input-field col s11">
                        <select id="year" required name="year">
                            <option value="" disabled selected>Year of Pursuing course</option>
                            <option value="Final year U.G." @if(strcmp(old('year'),"Final year U.G.")==0) selected @endif @if(Session::has('year')&&Session::get('year')==4) selected @endif>Final year U.G.</option>
                            <option value="Final year P.G." @if(strcmp(old('year'),"Final year P.G.")==0) selected @endif @if(Session::has('year')&&Session::get('year')==-1) selected @endif>Final year P.G.</option>
                            <option value="Pre-final year of Engineering" @if(strcmp(old('year'),"Pre-final year of Engineering")==0) selected @endif @if(Session::has('year')&&Session::get('year')<=3&&Session::get('year')>=1) selected @endif>Pre-final year of Engineering</option>
                        </select>
                        <label>Year of pursuing Course</label>
                    </div>
                </div>
    
            <div class="row">
                <div class="input-field col s12 m3 ">
                    <i class="material-icons prefix">description</i>
                    <input id="branch" type="text" value="{{old('branch')}}" name="branch" class="validate" required>
                    <label for="branch" class="active" >Branch/Dept./Specialization</label>
                </div>
                <div class="input-field col s12 m3 ">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" type="email" value="{{old('email')}}" name="email" class="validate" required>
                        <label for="email" data-error="not a vaild Email ID">Email Id</label>
                </div>
                <div class="input-field col s12 m3 ">
                        <i class="material-icons prefix">phone</i>
                        <input id="phone" type="text" value="{{old('phone')}}" name="phone" class="validate" pattern="[0-9]{10}" required>
                        <label for="phone" data-error="not a vaild Mobile Number">Phone Number</label>
                </div>
                <div class="input-field col s12 m3 ">
                        <i class="material-icons prefix">contact_phone</i>
                        <input id="guardian_phone" type="text" value="{{old('guardian_phone')}}" name="guardian_phone" class="validate" pattern="[0-9]{10}" required>
                        <label for="guardian_phone" data-error="not a vaild Mobile Number">Guardian Phone Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 ">
                    <i class="material-icons prefix">account_balance</i>
                    <textarea id="college" name="college"  class="materialize-textarea" length="150">
                        {{old('college')}}
                    </textarea>
                    <label for="college">College Name With Address</label>
                </div>
                <div class="input-field col s12 m6 ">
                    <i class="material-icons prefix">speaker_notes</i>
                    <textarea id="reason" name="reason" class="materialize-textarea" length="200">{{old('reason')}}</textarea>
                    <label for="reason">Reason for attending SEP</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m3 ">
                    <i class="material-icons prefix">credit_card</i>
                    <input id="dd_no" type="text" value="{{old('dd_no')}}" name="dd_no" class="validate" required>
                    <label for="dd_no">DD NO</label>
                </div>
                <div class="input-field col s12 m3 ">
                    <i class="material-icons prefix">today</i>
                    <input id="dd_date" type="date" value="{{old('dd_date')}}" name="dd_date" class="datepicker" required>
                    <label for="dd_date" class="active">DD Date</label>
                </div>
                <div class="input-field col s12 m6 ">
                    <i class="material-icons prefix">credit_card</i>
                    <input id="bank_name" value="{{old('bank_name')}}" type="text" name="bank_name" class="validate" required>
                    <label for="bank_name">Bank Name</label>
                </div>

            </div>

            <input name="isnit" id="isnit" value="0" type="hidden">

            <div class="row">
                <div class="input-field col s12 m6 offset-s3 ">
                    <button class="btn waves-effect waves-light blue" type="submit" name="action">
                        Submit    <i class="material-icons">send</i>
                    </button>
                </div>
            </div>
            <br>
        </form>
    </div>        
@stop

@section('javascript')
    $(document).ready(function(){
    $('select').material_select();
    $('#college').val("{{old('college')}}");
    @if(Session::has('name'))
        $('#name').attr('value','{{Session::get("name")}}');
        $('#branch').attr('value','{{Session::get("branch")}}');
        $('#college').val("{{Session::get('college')}}");
        //$('#college').attr("class","materialize-textarea disabled");
        $('#isnit').attr("value","1");
    @endif

    });
    $('.select-dropdown').find('span').on('click',function(){
    $newSelect.trigger('close');
    });
    $( "#course" ).change(function() {
    var course = $("#course").val();
    if(course.localeCompare("other")==0)
    {
    $("#other_course_div").css("display","inline");
    $('#course_div').css("display","none");
    }
    });
    @if(strcmp(old('course'),"other")==0) 
        $("#other_course_div").css("display","inline");
        $('#course_div').css("display","none");
    @endif
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
    });
@stop
