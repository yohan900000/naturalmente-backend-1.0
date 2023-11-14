@extends('auth.base')

@section('content')
    <section class="auth">
        <div id="container">
            @if($errors->any())
                @foreach($errors->all() as $message)
                <div class="alert">
                    <i class="fa-solid fa-circle-xmark error"></i>
                    <div class="text">
                        <b>Une erreur est survenue</b>
                        {{ $message }}
                    </div>
                </div>
                @endforeach
            @endif

                @if(session('error'))
                    <div class="alert">
                        <i class="fa-solid fa-circle-xmark error"></i>
                        <div class="text">
                            <b>Une erreur est survenue</b>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

            <div class="logo">
                <i class="fa-brands fa-laravel"></i>
            </div>
            <div class="form_auth">
                <form action="" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password">
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
