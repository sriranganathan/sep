<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <title>@yield('title')</title>
        <meta name="author" content="Department of Management Studies, NIT Trichy">
        <meta name="description" content="Two-day employability Skill Enhancement Programme">
        <meta name="keywords" content="Skill Enhacement Programme,SEP,2015,NITT,DoMS,Department of Management Studies">
        <script>var base_url = "{{ url('/') }}";</script>
        @yield('css')
        <style>
         body{
             background-image: url("{{asset('images/brushed_alu.png')}}");
             display: flex;
             min-height: 100vh;
             flex-direction: column;
         }

         main {
             flex: 1 0 auto;
         }
         .container-fluid
         {
             width:80%;
             margin-left:10%;
         }
         nav > div > ul > li.active
         {
             background:teal !important;
         }
        </style>
    </head>
    <body>
        <!-- blue-grey lighten-5 -->
        <main>
            <div class="container-fluid">
                <nav>
                    <div class="nav-wrapper blue white-text" >
                        <a href="/" class="brand-logo"><img src="images/nitt.png" style="height: 64px;"></a>
                        <a href="#" data-activates="mobile-nav" class="waves-effect button-collapse right" style="padding:0 10px"><i class=" mdi-navigation-menu"></i></a>
                        <ul class="nav-mobile right hide-on-med-and-down">
                            @yield('nav-bar')
                        </ul>
                        <ul class="side-nav" id="mobile-nav">
                            @yield('side-nav')
                        </ul>
                    </div>
                </nav>
                @yield('content')
            </div>
        </main>
        <div class="container-fluid">
            <footer class="blue page-footer">
                <div class="footer-copyright">
                    <div class="row">
                        <a class="grey-text text-lighten-4 col s8">Developed by - Vignesh M , Gokul Srinivas , R Sriranganathan, Phalguni Das, Arun and Yassar</a>
                        <a class="grey-text text-lighten-4 col s4 right-align" href="http://domsnitt.in" target="_blank">&copy;DoMS</a>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
        <script>
         $(document).ready(function(){
             $(".button-collapse").sideNav();
         });
         @yield('javascript')
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55334208-4', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
