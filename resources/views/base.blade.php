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
                        <a class="grey-text text-lighten-4 col s4" href="http://domsnitt.in" target="_blank">&copy;DoMS</a>
                        <a class="grey-text text-lighten-4 col s4 center" href="http://www.nitt.edu" target="_blank">NIT Trichy</a>
                        <a class="grey-text text-lighten-4 col s4 right-align" href="http://delta.nitt.edu" target="_blank">Delta Force</a>
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
        </body>
</html>