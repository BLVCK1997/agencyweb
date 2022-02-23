@extends('layouts.optional')
@section('content')
    <div class="container-fluid stratege">
        <div class="col-12 banniere">
            <p class="banniere-text translate-middle">NOS SERVICES</p> 
            <p class="banniere-text2 translate-middle">Plateforme de marque</p>
        </div>

        <div class="d-flex justify-content-center py-2 my-5">
            <p class="col-md-7 text-center">
                Pour exister et se distinguer de ses concurrents, une marque a besoin d’une identité qui lui est propre. D’une identité forte et reconnaissable entre toutes. Une plateforme de marque permet de formaliser, de graver dans le marbre, ce qui fait cette singularité : son ADN.
            </p>
        </div>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6 img">
                </div>
                <div class="col-md-6">
                   <h1> Définir les fondations pour favoriser le développement.</h1>
                    <p>
                        Une plateforme de marque solide, batie par des professionnels, est indispensable pour tracer la voie vers une plus grande visibilité d’une entreprise. Elle est à la fois le socle stratégique sur lequel repose toute la stratégie marketing de l’entreprise et un outil de référence et de partage pour tous ceux qui collaborent autour d’elle. C’est pour cette raison que les équipes de Sharing s’y dédient avec autant d’énergie et de sérieux, dans un travail de co-construction et d’échange.
                   </p>
    
                </div>
            </div>
        </div>
        
        <br>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6">
                    <h1> Créer de la cohésion autour de votre marque.</h1>
                    <p>
                        Votre communication externe, comme interne, se doit d’être cohérente et basée sur des principes et des valeurs partagées par vos équipes et votre marché. La plateforme est ainsi la garantie de la cohérence de vos actions et décisions aussi bien au sein de votre entreprise que vis-à-vis de vos partenaires et clients. Elle aide vos collaborateurs à regarder dans la même direction et à renforcer la cohésion de vos équipes. Elle met en avant ce qui différencie votre marque des autres et permet à vos employés de s’identifier à elle.
                    </p>
                 </div>
                <div class="col-md-6 img">
                </div>
            </div>
        </div>

        <br>

        <div class="container-fluid">
            <div class="row">
                
                
                <!--cohérence-->
                
                <div class="col-lg-4">
                    <h1>Vision</h1>
                    <p>
                        Pour créer votre plateforme de marque, nous commençons par auditer votre propre marque auprès de vos collaborateurs. Pour cela, nous réalisons des interviews individuelles auprès des leaders d’opinions de votre entreprise, recueillons la vision de votre comité de direction sur son identité.
                    </p>
                </div>


                <!--Originalité-->
                
                <div class="col-lg-4">
                    <h1>Cohérence</h1>
                    <p>
                        Nous organisons également des ateliers de groupes pour vos collaborateurs afin d’avoir leurs avis sur les valeurs de votre marque, et ainsi mieux la comprendre en profondeur et créer de la cohérence autour d’elle. 
                    </p>
                </div>
                
                <!--Visibilité-->

                <div class="col-lg-4">
                    <h1>ADN</h1>
                    <p>
                        Après avoir analysé les résultats de ces interviews et de ces ateliers, nous construisons un document complet, structuré et mis en forme, afin de formaliser votre plateforme de marque, et ainsi définir clairement votre ADN. 
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center mt-5">
            <h3>Ils nous font confiance</h3>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/amundi.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/bnp.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/europcar.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/french-tech.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/houra.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/kerastase.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/mgen.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/nexity.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/nokia.png')}}" alt="" class="img-fluid"></div>
                <div class="col-sm-2 my-3"><img src="{{asset('assets/img/logo/pure.png')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>
@endsection