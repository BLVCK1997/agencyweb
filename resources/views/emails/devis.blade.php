@extends('layouts.optional')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 bggeome"></div>

            <div class="col-lg-9 bg-light">
                <div class="text-center pt-5">
                    <h1>Obtenir un devis</h1>
                    <p>Complétez le formulaire ci-dessous (ou envoyez un e-mail) pour obtenir un devis ou un rendez-vous avec nos équipes. Nous vous répondrons rapidement.</p>
                </div>

                <div class="container">
                    <form action="#" method="post">

                        <div class="mb-3">
                            <label for="subject" class="form-label">Sujet du Message</label>
                            <input type='text' placeholder="Demande de devis" name="subject" id="subject" class="form-control @error('name')is-invalid @enderror" readonly>
                        </div>

                        <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="name" class="form-label">Nom</label>
                            <input required type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name">
                            @error('name')
                                <div class="alert">{{$errors->first('name');}}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-8">
                            <label for="firstname" class="form-label">Prénom(s)</label>
                            <input required type="text" class="form-control @error('firstname') is-invalid @enderror}}" id="firstname" name="firstname">
                            @error('firstname')
                                <div class="alert">{{$errors->first('firstname');}}</div>
                            @enderror
                        </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                            <input required type="email" class="form-control @error('email') is-invalid @enderror}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            @error('email')
                                <div class="alert">{{$errors->first('email');}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input required type="text" class="form-control @error('phone') is-invalid @enderror}}" id="phone" name="phone">
                            @error('phone')
                                <div class="alert">{{$errors->first('phone');}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="mb-3">
                            <label for="category" class="form-label">Catégorie Client</label>
                            <select name="category" id="category" class="form-select" required>
                                <option selected>Dans quelle catégorie êtes vous?</option>
                                <option value="1">Particulier</option>
                                <option value="2"> Entreprise</option>
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

                        <div class="mb-3">
                            <h3>Par quels services êtes-vous interressé ?</h3>
                            <label for="branding" class="form-label">Branding</label>
                            <input type="checkbox" id="branding" name="branding">

                            <label for="creation" class="form-label">Création graphique</label>
                            <input type="checkbox" id="creation" name="creation">

                            <label for="webdesign" class="form-label">Web design</label>
                            <input type="checkbox" id="webdesign" name="webdesign">

                            <label for="webdev" class="form-label">Développement Web</label>
                            <input type="checkbox" id="webdev" name="webdev">
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

        </div>
    </div>

@endsection
