@extends('layouts.optional')
@section('content')
    <div class="container-fluid stratege">
        <div class="col-12 banniere">
            <p class="banniere-text translate-middle">NOS SERVICES</p> 
            <p class="banniere-text2 translate-middle">Motion design</p>
        </div>

        <div class="d-flex justify-content-center py-2 my-5">
            <p class="col-md-7 text-center">
                Le motion design ou animation graphique est l’un des formats les plus performants pour capter l’attention des clients. Pour les campagnes de sensibilisation ou la sortie d’un nouveau produit ou service, nos motion designers font en sorte de faire passer votre message efficacement à votre public cible. Que vous ayez déjà une idée précise de ce que vous voulez faire ou que vous soyez encore à la recherche de bonnes idées, nos équipes vous aident à créer les meilleures animations.
            </p>
        </div>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6 img">
                </div>
                <div class="col-md-6">
                   <h1> Une image vaut mille mots. Un motion design vaut mille images.</h1>
                    <p>
                        Si l’image est déjà bien plus expressive que les mots, le motion design permet de faire encore mieux. Les vidéos courtes sont très appréciées du public et retiennent davantage l’attention. Le motion design vous donne le temps et le moyen nécessaires pour vous adresser à votre public et de les atteindre.
                   </p>
    
                </div>
            </div>
        </div>
        
        <br>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6">
                    <h1> Mettre les idées en mouvement.</h1>
                    <p>
                        Les consommateurs apprécient les images mais ils aiment encore plus les vidéos. Grâce au motion design, donnez de la vie à vos idées pour engager vos cibles. Chez Sharing, nous créons les animations de façon à mettre en avant l’idée, le produit ou le service que vous souhaitez faire connaître à votre public. Nous tenons à donner à votre marque l’image d’une entreprise dynamique et moderne !
                    </p>
                 </div>
                <div class="col-md-6 img">
                </div>
            </div>
        </div>

        <br>

        <div class="container-fluid">
            <div class="row">
                
                
                <!--Efficacité-->
                
                <div class="col-lg-4">
                    <h1>Efficacité</h1>
                    <p>
                        Grâce à l’animation qui fait la particularité du motion design, vous avez de plus grande chance de retenir l’attention du public. Non seulement les gens restent plus longtemps sur votre page ou votre publication mais ils se concentrent aussi naturellement sur votre message.
                    </p>
                </div>


                <!--Diffusion-->
                
                <div class="col-lg-4">
                    <h1>Diffusion</h1>
                    <p>
                        Le motion design est utilisé sur toutes sortes de support de communication. Diffusez vos messages sur internet, sur les réseaux sociaux, à la télévision ou sur les panneaux publicitaires pour atteindre un public plus large. Les motion designers de Sharing vous conseillent sur la meilleure manière de diffuser vos messages. 
                    </p>
                </div>
                
                <!--Originalité-->

                <div class="col-lg-4">
                    <h1>Originalité</h1>
                    <p>
                        Nous nous engageons à ne pas reproduire 2 fois le même design pour nos clients. Avec nous, votre identité visuelle ne rappellera pas celle d’une autre marque, elle sera à la fois authentique et originale.
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