@extends('layouts.optional')
@section('content')
    <br>

    <div class="container py-5">
        <h1 class="text-center">
            Nos services
        </h1>
        <p>
            Nous fournissons un accompagnement global pour permettre aux entreprises 
            ou organisations de développer leurs marques et leur visibilité!
        </p>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-md-center" style="background-color:#DDD">
            <div class="col-md-6 col-lg-6">
                <img src="{{asset('assets/img/bg/two.jpg')}}" alt="" class="img-fluid" height="500">
            </div>
            <div class="col-lg-6 py-5">
                <h1>
                    Conseil en communication et stratégie de marque
                </h1>
                <p>
                    Nous accompagnons les entreprises dans leur stratégie de marque : 
                    architecture, positionnement et territoire d’expression de marque
                </p>
                <a href="#" class="btn btn-dark"> En savoir plus</a>
            </div>
        </div>
    </div>

    <div class="container mt-3 text-center">
        <div class="row">
            
            <div class="col-sm-4 col-md-3">
                <a href="{{route('positionnement')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Positionnement</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="{{route('platform_marque')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Platforme de marque</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="{{route('expression_area')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Territoire d'expression</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="{{route('nom_marque')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Nom de la marque</span>
                </a>  
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-md-center" style="background-color:#DDD">
            <div class="col-md-6 col-lg-6">
                <img src="{{asset('assets/img/bg/two.jpg')}}" alt="" class="img-fluid" height="500">
            </div>
            <div class="col-lg-6 py-5">
                <h1>
                    Création graphique
                </h1>
                <p>
                    Notre équipe de création ainsi que notre studio photo nous permettent 
                    de produire les meilleurs supports de communication pour nos clients.
                </p>
                <a href="#" class="btn btn-dark"> En savoir plus</a>
            </div>
        </div>
    </div>

    {{-- <div class="container mt-5 text-center">
        <div class="row">
            
            <div class="col-sm-4 col-md-3">
                <a href="#">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Amundi</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="#">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Amundi</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="#">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Amundi</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="#">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Amundi</span>
                </a>  
            </div>
        </div>
    </div> --}}<div class="container mt-3 text-center">
        <div class="row">
            
            <div class="col-sm-4 col-md-3">
                <a href="{{route('logo')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Création de logo</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="{{route('identity')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Identité visuelle</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="{{route('motion')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Motion design</span>
                </a>  
            </div>
            <div class="col-sm-4 col-md-3">
                <a href="{{route('video')}}">
                    <p class="colimg d-flex align-items-end justify-content-center position-relative">
                    </p>
                    <span>Vidéo</span>
                </a>  
            </div>
        </div>
    </div>
@endsection