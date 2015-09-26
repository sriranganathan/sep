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
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image1.jpg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Dr. Srinivasan Sundarrajan<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Dr. Srinivasan Sundarrajan<i class="material-icons right">close</i></span>
                    <p>
                        Director, NIT Trichy. Former Missile Scientist at DRDO
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image2.jpeg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. Ravi Kumar<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. Ravi Kumar<i class="material-icons right">close</i></span>
                    <p>
                        Chairman, Zanec Ltd, India, USA, UK
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image3.jpg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. Soma Valliappan<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. Soma Valliappan<i class="material-icons right">close</i></span>
                    <p>
                        Writer, Motivational Speaker, Trainer, HR Consultant <br/>
                        Menmai Management Consultancy Services, Chennai
                    </p>
                    <div class="card-action">
                        <a href="http://www.writersomavalliappan.com" target="_blank" class="blue-text">More Info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image9.jpg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. V. Pandirajan<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. V. Pandirajan<i class="material-icons right">close</i></span>
                    <p>
                        IRS, Deputy Director, Directorate General of Central Excise Intelligence, Calcutta
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <center><img class="activator" src="images/image7.jpeg" width="337px"></center>
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. Mukundha Krishnan<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. Mukundha Krishnan<i class="material-icons right">close</i></span>
                    <p>
                        Holistic Healing Consultant and Yoga Guru, Madurai
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image4.jpg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Dr. B. Vinodh<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Dr. B. Vinodh<i class="material-icons right">close</i></span>
                    <p>
                        Faculty, Dept of Humanities, NIT-Trichy
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card"> 
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image10.jpg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. B.T.Bangera<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. B.T.Bangera<i class="material-icons right">close</i></span>
                    <p>
                        MD, Hi-Tech Arai Pvt Ltd, Madurai (Alumnus of IIM-A)
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <center><img class="activator" src="images/image8.jpeg" height="auto" width="337px"><center>
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Mrs. Anuradha Nagarajan<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mrs. Anuradha Nagarajan<i class="material-icons right">close</i></span>
                    <p>
                        HR Consultant, Chennai
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <center><img class="activator" src="images/image5.jpeg" height="auto" width="337px"></center>
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Dr. K. Ganesh<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Dr. K. Ganesh<i class="material-icons right">close</i></span>
                    <p>
                        Knowledge Expert, McKinsey & Company, Inc. Chennai (Alumnus of NIT Trichy and IIT-Madras)
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">    
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/image6.jpeg" height="auto" width="337px">
                </div>
                <div class="card-content">
                    <span class="card-title black-text activator">Dr. G. Muruganantham<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Dr. G. Muruganantham<i class="material-icons right">close</i></span>
                    <p>
                        Faculty, Dept of Management Studies, NIT Trichy<br/>
                        Teaching, Research and Consultancy interest includes Branding, Consumer Insight and Quality Management. <br/>
                        Corporate Trainer and Serving as a mentor to Students<br/>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card" style="min-height: 200px;">    
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. A. S. Samad<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. A. S. Samad<i class="material-icons right">close</i></span>
                    <p>
                        AGM-HR, BHEL-Trichy
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card" style="min-height: 200px;">    
                <div class="card-content">
                    <span class="card-title black-text activator">Mr. Ramnath<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title black-text">Mr. Ramnath<i class="material-icons right">close</i></span>
                    <p>
                        Senior HR Manager, Perfetti Van Melle India Pvt Ltd, Chennai
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
