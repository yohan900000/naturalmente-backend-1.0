@extends('administration.base')
@section('content')
    <div class="main-content">
        <div class="top_bar">
            bonjour {{ auth()->user()->name }}
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                @method('delete')
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        </div>
        <div class="content">
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
            <div class="container__main">
                <div class="main__top">
                    <h2>Création d'un text</h2>
                </div>
                <div class="content">
                    <div class="form__main">
                        <form action="" method="POST">
                            @csrf
                            @method('post')
                            @method(request()->segment(3) === 'create' ? 'post' : 'put')
                            <div class="form-group">
                                <label for="gamme_id">Gamme</label>
                                <select name="gamme_id" id="gamme_id" multiple>
                                    @foreach($gammes as $gamme)
                                        <option value="{{ $gamme->id }}" {{ $gamme->id === $text->gamme_id ? 'selected' : '' }}>{{ $gamme->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="sep"></span>
                            @include('administration.layouts.form', ['type' => 'textarea', 'label' => 'Votre text', 'name' => 'description', 'value' => old('', $text->description)])
                            <button class="btn_submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
