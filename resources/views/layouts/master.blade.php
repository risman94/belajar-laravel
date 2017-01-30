<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Arinoshop', 'Arinoshop') }}</title>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Arino Shop</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/pemesanan">Pemesanan</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

         <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading">Arino Shop</h1>
                    <h3>Happy Shopping Center</h3>
                </div>
            </div>
        </header>

        <div>
            @yield('isi')
        </div>

        <!-- Footer -->
        <footer>
            <!--div class="container col-md-12 col-lg-12 col-sm-12"-->
                <div class="row r-sdbar-contact">
                    <div class="col-md-6 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>081803628720</p>
                        <p>085239114901</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p>JL. Majapahit no.3 Mataram, Lombok - NTB</p>
                        <p>kamarulrisman1994@gmail.com</p>
                    </div>
                </div>
                <div class="row r-f">
                    <div class="col-md-12">
                        <p>Copyright &copy; Arinoshop 2017</p>
                    </div>
                </div>
            <!--/div-->
        </footer>


    <script src="/js/app.js"></script>
    </body>
</html>         