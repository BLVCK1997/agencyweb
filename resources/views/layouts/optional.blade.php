<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENCYWEB || HOME</title>
    <!-- <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    
    <div class="container-fluid slideps">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand mx-4" href="#">
                    <img src="{{asset('assets/img/logo/rcom.png')}}" class="logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item px-3 mx-3 responsive">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Agency</a>
                    </li>
                    <li class="nav-item px-3 mx-3 responsive">
                    <a class="nav-link" href="{{route('service')}}">Nos services</a>
                    </li>
                    <li class="nav-item px-3 mx-3 responsive">
                    <a class="nav-link" href="{{route('realisation')}}">Nos realisations</a>
                    </li>
                    <li class="nav-item px-3 mx-3 responsive">
                    <a class="nav-link" href="{{route('contact')}}">Nos contacts</a>
                    </li>
                    <!-- <li class=" devis nav-item px-3">
                    <a class="nav-link" href="/devis.php">Demander un devis</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
                <ul class="navbar-nav hidden">
                    <li class=" devis nav-item px-3">
                        <a class="nav-link" href="{{route('devis')}}">Demander un devis</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>



    <!--le contenu par dessous!-->
    @yield('content')



    <footer class="mt-5 pt-5 foot">

        <div class="container-fluid mb-4">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 col-lg-3 ps-5">
                    <h4>VOUS AVEZ UN PROJET ?</h4>
                    <h4>ON EN PARLE</h4>
                    <div class="my-4">
                        <a href="/devis.php" class="btn btn-primary text-light px-3 py-3"> Demander un Devis</a> 
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 ps-5">
                    <h4>AGENCYWEB</h4>
                    <a href="" class="agencyweb py-2"> 
                            A propos de nous
                    </a>
                    <a href="{{route('realisation')}}" class="agencyweb py-2"> 
                            Nos réalisations
                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Lorem
                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Ipsum
                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Sanctus
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3 ps-5">
                    <h4>NOS SERVICES</h4>
                    <a href="" class="agencyweb py-2"> 
                            Branding
                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Social Media

                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Développement web

                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Design Graphique

                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Studio de création
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3 ps-5">
                    <h4>CONTACTS</h4>
                    <a href="{{route('contact')}}" class="agencyweb py-2"> 
                            Contactez-nous
                    </a>
                    <a href="" class="agencyweb py-2"> 
                            Abidjan, Yopougon Bel Air
                    </a>

                    <!-- <div class="container">

                    </div> -->
                    
                    <a href="" class="agencyweb py-2"> 
                        S'inscrire à la newsletter
                    </a>
                </div>
            </div>
        </div>
        
        <hr>

        <div class="my-0 pb-3">
            <p class="text-center text-white my-0 py-2">© Agencyweb • Politique de confidentialité • Mentions Légales • vsolsoft</p>
        </div>
    </footer>

    <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/styleoptional.js')}}"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>
</html>