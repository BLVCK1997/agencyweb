@extends('layouts.optional')
@section('content')


    <div class="container-fluid pt-5 text-center">
        <h1 class="mt-5">
            Hello!
        </h1>
        <h2>
            Envoyer un message
        </h2>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <form action="#" method="post">

                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet du Message</label>
                    <select name="subject" id="subject" class="form-select">
                        <option selected>Votre choix</option>
                        <option value="1">Demande de devis</option>
                        <option value="2"> Une question?</option>
                        <option value="3">Autre</option>
                    </select>
                </div>

                <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3 col-md-8">
                    <label for="firstname" class="form-label">Prénom(s)</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>

                <div class="mb-3">
                    <label for="enterprise" class="form-label">Entreprise</label>
                    <input type="text" class="form-control" id="enterprise" name="enterprise">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea type="text" class="form-control" id="message" name="message">
                    </textarea>
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
