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
        <div class="container__main">
            @if(session('success'))
                <div class="alert">
                    <i class="fa-solid fa-circle-check success"></i>
                    <div class="text">
                        <b>Opération réussi</b>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
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
            <div class="main__top">
                <h2>Ajout d'une gamme</h2>
            </div>
            <form action="" method="POST">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="name" placeholder="Nom de la gamme">
                </div>
                <button type="submit" class="btn_submit">Valider</button>
            </form>

            <div class="main__top">
                <h2>Mes gammes</h2>
                <a class="btn_add" href="{{ route('admin.framing-text.create') }}">Ajouter</a>
            </div>
            <table class="table_add_gamme">
                <thead>
                <tr>
                    <th>Gammes</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($gammes as $gamme)
                    <tr>
                        <td>{{ str_replace('_', ' ', $gamme->name) }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                @method('delete')
                                <button name="delete_gamme" value="{{ $gamme->id }}"><i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

@endsection
