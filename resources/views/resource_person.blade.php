@extends('base')

@section('title')
    Resource Person
@stop

@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@stop
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Areas of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li class="active"><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Areas of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li class="active"><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop
@section('content')
    <div class="row">
        <div class="card-panel white z-depth-4">
            <center>
                <p style="font-size:21px;line-height:30px">
                    Sessions will be handled by Thought Leaders, Senior HR Managers, Career Consultant, Psychiatrist, Practicing Managers, Successful Entrepreneur and Academicians. 
                </p>
            </center>
        </div>
    </div>   
    <div class="row">
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Dr. Srinivasan Sundarrajan</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image1.jpg">
                    <div class="col s8 ">
                        Director, NIT Trichy. Former Missile Scientist at DRDO
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. Ravi Kumar</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image2.jpeg">
                    <div class="col s8 ">
                        <p>Chairman, Zanec Ltd, India, USA, UK</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. Soma Valliappan</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image3.jpg">
                    <div class="col s8 ">
                       Writer, Motivational Speaker, Trainer, HR Consultant <br/>
                       Menmai Management Consultancy Services, Chennai
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Dr. B. Vinodh</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image4.jpg">
                    <div class="col s8 ">
                        Faculty, Dept of Humanities, NIT-Trichy
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Dr. K. Ganesh</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image5.jpeg">
                    <div class="col s8 ">
                        Knowledge Expert, McKinsey & Company, Inc. Chennai (Alumnus of NIT Trichy and IIT-Madras)
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Dr. G. Muruganantham</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image6.jpeg">
                    <div class="col s8 ">
                        Faculty, Dept of Management Studies, NIT Trichy<br/>
                        Teaching, Research and Consultancy interest includes Branding, Consumer Insight and Quality Management.<br/>
                        Corporate Trainer and Serving as a mentor to Students<br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. Mukundha Krishnan</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image7.jpeg">
                    <div class="col s8 ">
                        Holistic Healing Consultant and Yoga Guru, Madurai
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mrs. Anuradha Nagarajan</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image8.jpeg">
                    <div class="col s8 ">
                        HR Consultant, Chennai
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. V. Pandirajan</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image9.jpg">
                    <div class="col s8 ">
                        IRS, Deputy Director, Directorate General of Central Excise Intelligence, Calcutta
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. B.T.Bangera</h5>
                <div class="col s12 " style="min-height:120px;">
                    <img class="col s4 " src="images/image10.jpg">
                    <div class="col s8 ">
                        MD, Hi-Tech Arai Pvt Ltd, Madurai (Alumnus of IIM-A)
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. A. S. Samad</h5>
                <div class="col s12 " style="min-height:120px;">
                    <div class="col s12 ">
                        AGM-HR, BHEL-Trichy
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <h5 class="col s12 center-align">Mr. Ramnath</h5>
                <div class="col s12 " style="min-height:120px;">
                    <div class="col s12 ">
                        Senior HR Manager, Perfetti Van Melle India Pvt Ltd, Chennai
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
