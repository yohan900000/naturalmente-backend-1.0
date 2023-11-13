@extends('auth.base')

@section('content')
    <section class="auth">

        <div id="container">
            <div class="alert">
                <i class="fa-solid fa-circle-xmark error"></i>
                <div class="text">
                    <b>Une erreur est survenue</b>
                    Nom de compte ou mot de passe incorrect
                </div>
            </div>
            <div class="alert">
                <i class="fa-solid fa-circle-check success"></i>
                <div class="text">
                    <b>Connexion réussi</b>
                    Bonjour John Doe
                </div>
            </div>
            <div class="logo">
                <i class="fa-brands fa-laravel"></i>
            </div>
            <div class="form_auth">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password">
                    </div>
                    <div class="form-submit">
                        <a href="#">Mot de passe oublié</a>
                        <button type="submit" name="valid_auth">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
