@extends('default')

@section('contenu')

<div class="container padding-100">
    <div class="row justify-content-center">
            <div class="col-md-6">
                    <form method="post" action="contact">
                        {{ csrf_field() }}
                        <div class="card">
                            <h5 class="card-header text-center">Formulaire de contact</h5>
                        </div>

                        <div class="card-body">

                        <div class="form-group">
                            <label for="usr">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="usr" value="{{ old('email') }}" placeholder="Entrer votre e-mail">
                            @if($errors->has('email'))
                               <p> {{ $errors->first('email') }} </p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="comment">Message:</label>
                            <textarea class="form-control" name="message" rows="5" id="comment" placeholder="Tapez votre message ici"></textarea>
                            @if($errors->has('message'))
                               <p> {{ $errors->first('message') }} </p>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>    
            </div>            
    </div>
</div>

@stop