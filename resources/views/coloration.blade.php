@extends('base')

@section('Coloration', 'Accueil')

@section('content')
    <section class="coloration">
        <div id="container">
            <h1>Coloration</h1>
            <div class="content grid-1">
                <p>
                    Les colorants classiques contiennent souvent des substances nocives telles que le formaldéhyde, l'ammoniaque, les silicones et les conservateurs.
                    Ils ont un impact négatif sur notre santé, notre environnement et notre corps. Beaucoup de ces ingrédients proviennent de la
                    transformation des huiles minérales, ne pouvant pas se biodégrader et donc mauvais pour notre planète. Ils contiennent une multitude de substances
                    synthétiques et pétrochimiques nuisibles à la santé et à l'environnement.
                </p>
            </div>
            <div class="links__coloration">
                <a href="{{ route('gammes', ['slug' => 'couleur']) }}">
                    <div class="left">
                        <span>Ton et color</span>
                        <small>Coloration d'oxydation douce</small>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('gammes', ['slug' => 'plante']) }}">
                    <div class="left">
                        <span>Color plant flow</span>
                        <small>Coloration 100% végétale</small>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('gammes', ['slug' => 'wellness']) }}">
                    <div class="left">
                        <span>Color Wellness</span>
                        <small>Un soin d'entretion naturel de la couleur</small>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
