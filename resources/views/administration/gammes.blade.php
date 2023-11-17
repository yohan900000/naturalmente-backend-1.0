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
            <div class="main__top">
                <h2>Mes textes encadrer</h2>
                <a class="btn_add" href="{{ route('admin.framing-text.create') }}">Ajouter</a>
            </div>
                @if($framingTexts->isNotEmpty())
                    @foreach($framingTexts as $framingText)
                        <div class="content">
                            <article class="frame">
                                <p class="products__description">{!! strip_tags($framingText->description) !!}</p>
                                <div class="actions">
                                    <form action="{{ url()->current() }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="delete" name="delete_framing_text" value="{{ $framingText->id }}"><i class="fa-solid fa-xmark"></i></button>
                                    </form>
                                    <a class="update" href=""><i class="fa-solid fa-pen"></i></a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-info info"></i>
                        <div class="text">
                            <b>Information</b>
                            Aucun texte encadré n'a été ajouté jusqu'à présent.
                        </div>
                    </div>
                @endif

            <div class="main__top">
                <h2>Mes textes</h2>
                <a class="btn_add" href="#">Ajouter</a>
            </div>
            <article>
                <div class="content">
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-info info"></i>
                        <div class="text">
                            <b>Information</b>
                            Aucun texte n'a été ajouté jusqu'à présent.
                        </div>
                    </div>
                </div>
            </article>

            <div class="main__top">
                <h2>Mes images</h2>
                <a class="btn_add" href="#">Ajouter</a>
            </div>
            <article>
                <div class="content">
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-info info"></i>
                        <div class="text">
                            <b>Information</b>
                            Aucune image n'a été ajoutée jusqu'à présent.
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

@endsection
