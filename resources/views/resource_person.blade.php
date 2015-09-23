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
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Dr. Srinivasan Sundarrajan</span>
                    <p>
                        Director, NIT Trichy. Former Missile Scientist at DRDO
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mr. Ravi Kumar</span>
                    <p>
                        Chairman, Zanec Ltd, India, USA, UK
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mr. Soma Valliappan</span>
                    <p>
                        Writer, Motivational Speaker, Trainer, HR Consultant <br/>
                        Menmai Management Consultancy Services, Chennai
                    </p>
                </div>
                <div class="card-action">
                    <a href="http://www.writersomavalliappan.com" target="_blank" class="blue-text">More Info</a>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card" style="min-height: 195px;"> 
                <div class="card-content">
                    <span class="card-title black-text">Mr. B.T.Bangera</span>
                    <p>
                        MD, Hi-Tech Arai Pvt Ltd, Madurai (Alumnus of IIM-A)
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mr. A. S. Samad</span>
                    <p>
                        AGM-HR, BHEL-Trichy
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mr. Mukundha Krishnan</span>
                    <p>
                        Holistic Healing Consultant and Yoga Guru, Madurai
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card" style="min-height: 132px;">
                <div class="card-content">
                    <span class="card-title black-text">Dr. B. Vinodh</span>
                    <p>
                        Faculty, Dept of Humanities, NIT-Trichy
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mr. V. Pandirajan</span>
                    <p>
                        IRS, Deputy Director, Directorate General of Central Excise Intelligence, Calcutta
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mr. Ramnath</span>
                    <p>
                        Senior HR Manager, Perfetti Van Melle India Pvt Ltd, Chennai
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Mrs. Anuradha Nagarajan</span>
                    <p>
                        HR Consultant, Chennai
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card" style="min-height: 176px;">
                <div class="card-content">
                    <span class="card-title black-text">Dr. K. Ganesh</span>
                    <p>
                        Knowledge Expert, McKinsey & Company, Inc. Chennai (Alumnus of NIT Trichy and IIT-Madras)
                    </p>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">    
                <div class="card-content">
                    <span class="card-title black-text">Dr. G. Muruganantham</span>
                    <p>
                        Faculty, Dept of Management Studies, NIT Trichy<br/>
                        Teaching, Research and Consultancy interest includes Branding, Consumer Insight and Quality Management. <br/>
                        Corporate Trainer and Serving as a mentor to Students<br/>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
