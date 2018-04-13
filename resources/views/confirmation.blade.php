@extends('default')

@section('contenu')

    <div class="container padding-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Confirmation</h3>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-center">Message envoyé</h5>
                        <p class="card-text">Votre message a été envoyé normalement.
                        Vous serez contacté prochainement par notre équipe.</p>
                        <p>Merci de votre visite, à bientôt.</p>
                        <br>
                        <a href="/" class="btn btn-primary">Page d'acceuil</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>

@stop