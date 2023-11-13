@extends('public.base')

@section('content')
    <div id="container">
        <h1 class="products__title">Spa du Cheveu</h1>

        <div class="content grid-1">
            <p>
                Les traitements pour les cheveux et le spa de Naturalmente sont un choix conscient pour le corps et l'esprit. Chaque traitement est unique à sa manière et concerne le bien-être de l'être humain à différents niveaux. En réagissant à différents sens, le corps et l’esprit s’unissent pour créer un équilibre naturel, le devenir.
            </p>
            <p>
                <b>Huile de Shirodara Oriental</b>
                De l'ancienne tradition indienne, il prévoit le soulagement dès la tension nerveuse. Pendant toute la durée du traitement, il vous enveloppe d'un flux d'huiles chaudes et vous guide dans un état de relaxation et de bien-être profond. Il hydrate la peau en profondeur et rend les cheveux soyeux, lisses et brillants.
            </p>
            <p>
                <b>Huile de jojoba</b>
                Il s’agit d’un soin contenant les précieux ingrédients d’une cire végétale, obtenue par pressage à froid. Toujours connu sous le nom d'or liquide, il procure une hydratation intense, reconstruit les fibres du cheveu et procure des cheveux doux, élastiques et brillants.
            </p>
        </div>
        <div class="pictures">
            <img src="{{ asset('images/products/spa-cheveux/1.jpg') }}" alt="">
            <img src="{{ asset('images/products/spa-cheveux/2.jpg') }}" alt="">
            <img src="{{ asset('images/products/spa-cheveux/3.jpg') }}" alt="">
        </div>
    </div>
@endsection
