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
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                            <label for="message" class="form-label">Votre demande</label>
                            <textarea type="text" class="form-control" id="message" name="message">
                            </textarea>
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