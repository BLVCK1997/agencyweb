@extends('layouts.main')
@section('content')  
    <div class="container mt-5">
        <p id="first">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tenetur, facere rerum odit ullam assumenda dolorem perferendis deleniti id vel illo veritatis, qui, exercitationem consequatur nesciunt animi eos necessitatibus excepturi?</p>
    </div>

    <div class="container mt-5">
        <h1 class="text-center">Nos Services</h1>
        <div class="row">
            <div class="col-lg-4">

                <p class="bg-success">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aperiam maxime eligendi officiis officia provident fugit sequi esse, repellendus recusandae totam voluptatum, veritatis odit autem sapiente temporibus debitis! Nam, qui?
                </p>
                <h4 class="text-center">Success</h4>

                <p class="bg-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto pariatur soluta earum, sequi nihil recusandae nulla officia, excepturi expedita voluptates consectetur deserunt possimus ipsum voluptas. Ducimus, quasi? Numquam, ipsum odio!
                </p>
                <h4 class="text-center">Info</h4>
            </div>
            <div class="col-lg-4">
                <p class="bg-primary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aperiam maxime eligendi officiis officia provident fugit sequi esse, repellendus recusandae totam voluptatum, veritatis odit autem sapiente temporibus debitis! Nam, qui?
                </p>
                <h4 class="text-center">Primary</h4>

                <p class="bg-dark text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto pariatur soluta earum, sequi nihil recusandae nulla officia, excepturi expedita voluptates consectetur deserunt possimus ipsum voluptas. Ducimus, quasi? Numquam, ipsum odio!
                </p>
                <h4 class="text-center">Dark</h4>
            </div>
            <div class="col-lg-4">
                <p class="bg-warning">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aperiam maxime eligendi officiis officia provident fugit sequi esse, repellendus recusandae totam voluptatum, veritatis odit autem sapiente temporibus debitis! Nam, qui?
                </p>
                <h4 class="text-center">Warning</h4>

                <p class="bg-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto pariatur soluta earum, sequi nihil recusandae nulla officia, excepturi expedita voluptates consectetur deserunt possimus ipsum voluptas. Ducimus, quasi? Numquam, ipsum odio!
                </p>
                <h4 class="text-center">Info</h4>
            </div>
            <div class="text-center my-5">
                <a href="{{route('service')}}" class=" btn-dark  py-4 px-4">Voir tous nos Services</a>
            </div>
            
        </div>
    </div>

    <div class="container-fluid my-5 bg-light d-flex justify-content-center border-radius-bottom-block">
        <div class="print1">
            <img src="{{asset('assets/img/bg/rcomcover.jpg')}}" class="img-fluid" alt="">
            <a href="{{route('realisation')}}" class="more btn btn-dark">Nos Réalisations</a>
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
@endsection    