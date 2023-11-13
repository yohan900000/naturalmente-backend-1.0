@extends('public.base')

@section('content')
    <div id="container">
        <h1 class="products__title">Gamme In Bloom</h1>
        <p class="products__description">
            Tous les produits contiennent des huiles essentielles de culture biologique d'une pureté de 100%. Ils ne contiennent pas d’huile minérale, de laureth sulfate de sodium (SLS),
            de parabens, de formaldéhyde, de soude caustique, d’acides éthylènediaminetétraacétique (EDTA), d’éthanolamines (DEA, TEA, MEA).
        </p>
        <section class="products">
            <div class="product clickable-product">
                <img src="{{ asset('images/products/nature-inside/shampoing/citron.png') }}" alt="">
                <h2>Shampooing Citrus</h2>
                <div class="modal-product">
                    <div class="content-modal">
                        <div class="top-modal">
                            <h2>Shampooing Citrus</h2>
                            <span><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <img src="{{ asset('images/products/nature-inside/shampoing/citron.png') }}" alt="">
                        <p>
                            <b>Shampoing nettoyant 100% végétal et restructurant</b>
                            La présence d'un tensio-actif très original dérivé de l'huile d'argan en fait un shampoing procure brillance et volume en nourrissant le cheveu en profondeur.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
