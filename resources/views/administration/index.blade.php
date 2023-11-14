@extends('administration.base')

@section('content')
        <div class="main-content">
            <div class="top_bar">
                <div class="links">
                    <a href="create_products.html">Ajouter un produit</a>
                </div>
                bonjour {{ auth()->user()->name }}
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    @method('delete')
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            </div>
            <div class="container__main">
                @if(session('error'))
                    <div id="container">
                        <div class="alert alert-danger" style="margin-bottom: 20px">
                            <i class="fa-solid fa-circle-xmark error"></i>
                            <div class="text">
                                <b>Une erreur est survenue</b>
                                {{ session('error') }}
                            </div>
                        </div>
                    </div>
                @endif
        </div>
@endsection
