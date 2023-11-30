<div class="navbar_left">
    <div class="title__navbar_left">Administration</div>
    <div class="sep"></div>
    <div class="navigation">
        <span class="title__navigation">Pages</span>
        <nav>
            <li class="{{ request()->is('administration') ? 'active' : '' }}"><a href="{{ route('admin.admin') }}">Accueil</a></li>
            <li class="{{ request()->is('administration/contact') ? 'active' : '' }}"><a href="">Contact</a></li>
            <li class="{{ request()->is('administration/spa-hair') ? 'active' : '' }}"><a href="">Spa du cheveu</a></li>
            <li class="{{ request()->is('administration/coloration') ? 'active' : '' }}"><a href="">Coloration</a></li>
            <li class="{{ request()->is('administration/add_gamme') ? 'active' : '' }}"><a href="{{ route('admin.add_gamme.index') }}">Liste des gamme</a></li>
        </nav>
    </div>
    <div class="sep"></div>
    <div class="navigation">
        <span class="title__navigation">Nos gammes</span>
        <nav>
        @foreach($gammes as $navigation)
            <li class="{{ request()->is("administration/gammes/{$navigation->name}*") ? 'active' : '' }}"><a href="{{ route('admin.gammes', ['slug' => $navigation->name ]) }}">{{ str_replace('_', ' ', $navigation->name) }}</a></li>
        @endforeach
        </nav>
    </div>
</div>
