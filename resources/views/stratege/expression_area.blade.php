@extends('layouts.optional')
@section('content')
    <div class="container-fluid stratege">
        <div class="col-12 banniere">
            <p class="banniere-text translate-middle">NOS SERVICES</p> 
            <p class="banniere-text2 translate-middle">Territoire d’expression</p>
        </div>

        <div class="d-flex justify-content-center py-2 my-5">
            <p class="col-md-7 text-center">
                Pour affirmer son identité auprès du public, une marque a besoin de définir son territoire d’expression et d’y évoluer. Chez Sharing, nous accompagnons les marques dans leur prise de parole, non seulement pour asseoir leurs valeurs et images auprès des consommateurs mais aussi pour mettre en exergue leurs particularités face à leurs concurrents.
            </p>
        </div>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6 img">
                </div>
                <div class="col-md-6">
                   <h1> Définir la bonne tonalité pour augmenter la visibilité.</h1>
                    <p>
                        L’identité d’une marque n’est pas seulement visuelle, elle est aussi définie par le ton qu’elle emploie pour s’adresser à son audience. Les équipes de Sharing mettent leur expertise en communication et en stratégie de marque à la disposition des entreprises pour choisir une tonalité en adéquation avec leurs clients et leurs valeurs. Bien choisir la tonalité d’une marque est indispensable afin qu’elle gagne en visibilité et qu’elle atteigne avec efficacité son public cible.
                   </p>
    
                </div>
            </div>
        </div>
        
        <br>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6">
                    <h1> Une voix unique pour sortir du lot.</h1>
                    <p>
                        S’exprimer sur les différentes plateformes de communication en restant fidèle à la tonalité et à la ligne éditoriale de sa marque peut être un vrai défi pour une entreprise. Afin que le public puisse identifier une marque sans effort parmi d’autres, Sharing l’aide à trouver et à mettre en avant sa spécificité. Quel que soit le code du réseau ou du dispositif à utiliser pour la communication, la marque pourra toujours s’exprimer d’une voix unique qui le distinguera de ses concurrents. 
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
                    <h1>Cohérence</h1>
                    <p>
                        Toutes les marques ont besoin d’utiliser une stratégie omnicanale pour leur communication. Nous activons votre campagne au moment où votre audience est à l’écoute et assurons la cohérence de toutes vos actions sur chacun de ces dispositifs. Sharing tient aussi compte de votre communication interne afin que votre équipe puisse collaborer harmonieusement et véhiculer les valeurs de votre marque auprès du public.
                    </p>
                </div>


                <!--Originalité-->
                
                <div class="col-lg-4">
                    <h1>Différenciation</h1>
                    <p>
                        Les consommateurs sont sollicités par un grand nombre de marques sur la toile et à travers différentes sortes de moyens de communication. Pour les attirer, vous avez besoin d’être unique et c’est le cœur de notre mission. Nous définissons un territoire d’expression où vous serez entendu de votre public cible.
                    </p>
                </div>
                
                <!--Visibilité-->

                <div class="col-lg-4">
                    <h1>Visibilité</h1>
                    <p>
                        Etre différent vous donne déjà un avantage important mais il est encore mieux d’atteindre les clients avec des messages percutants. Nous faisons en sorte que votre prise de parole ait un réel impact et vous démarque dans votre domaine de prédilection.

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