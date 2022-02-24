@extends('layouts.optional')
@section('content')


    <div class="container-fluid pt-5 text-center">
        <h1 class="mt-5">
            Hello!
        </h1>
        @if(Session::has('success'))
        {{Session::get('success')}}
        @endif
        <h2>
            Envoyer un message
        </h2>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <form action="{{route('contact-send')}}" method="post">
                @method('post')
                @csrf
                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet du Message</label>
                    <select name="subject" id="subject" class="form-select @error('subject')is-invalid @enderror" >
                        <option value="dddd"selected>Votre choix</option>
                        <option value="1">Demande de devis</option>
                        <option value="2"> Une question?</option>
                        <option value="3">Autre</option>
                    </select>
                    @error('subject')
                        <div class="alert">{{$errors->first('subject');}}</div>
                    @enderror
                </div>

                <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="name" class="form-label">Nom</label>
                    <input  type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name">
                    @error('name')
                        <div class="alert">{{$errors->first('name');}}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-8">
                    <label for="firstname" class="form-label">Prénom(s)</label>
                    <input  type="text" class="form-control @error('firstname') is-invalid @enderror}}" id="firstname" name="firstname">
                    @error('firstname')
                        <div class="alert">{{$errors->first('firstname');}}</div>
                    @enderror
                </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                    <input  type="email" class="form-control @error('email') is-invalid @enderror}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    @error('email')
                        <div class="alert">{{$errors->first('email');}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input  type="text" class="form-control @error('phone') is-invalid @enderror}}" id="phone" name="phone">
                    @error('phone')
                        <div class="alert">{{$errors->first('phone');}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="mb-3">
                    <label for="category" class="form-label">Catégorie Client</label>
                    <select name="category" id="category" class="form-select @error('category') is-invalid @enderror" >
                        <option value="" selected>Dans quelle catégorie êtes vous?</option>
                        <option value=1>Particulier</option>
                        <option value=2> Entreprise</option>
                        @error('category')
                            <div class="alert">{{$errors->first('category');}}</div>
                        @enderror
                    </select>
                </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea type="text" rows="5" class="form-control @error('message') is-invalid @enderror}}" id="message" name="message">
                    </textarea>
                    @error('message')
                        <div class="alert">{{$errors->first('message');}}</div>
                    @enderror
                </div>

                <p>
                Nous respectons vos données. En soumettant ce formulaire, vous acceptez que les informations saisies soient exploitées par nos services dans le seul but de vous recontacter, et ce dans le respect de notre politique de confidentialité.
                </p>

                <div class="d-flex justify-content-center">
                <button class="btn btn-primary px-5 py-3"> Envoyer</button>
                </div>

            </form>
        </div>
    </div>

@endsection
