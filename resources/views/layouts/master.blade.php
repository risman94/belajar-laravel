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
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Produk <span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
<<<<<<< HEAD
                                @foreach($kategori as $kat)
=======
                                @foreach($kategori as $kategori)
>>>>>>> 3347637d9a6288dd8524a9a0a7f17ec97b04549d
                                <li>
                                    <a href="/kategori/{{$kat->id}}">{{$kat->name_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#">Pemesanan</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
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
                    <hr>
                </div>
            </div>
        </header>

        <div>
            @yield('isi')
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>


    <script src="/js/app.js"></script>
    </body>
</html>         
