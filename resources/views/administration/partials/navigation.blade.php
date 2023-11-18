<div class="navbar_left">
    <div class="title__navbar_left">Administration</div>
    <div class="sep"></div>
    <div class="navigation">
        <span class="title__navigation">Pages</span>
        <nav>
            <li class="active"><a href="{{ route('admin.admin') }}">Accueil</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="">Spa du cheveu</a></li>
            <li><a href="">Coloration</a></li>
        </nav>
    </div>
    <div class="sep"></div>
    <div class="navigation">
        <span class="title__navigation">Nos gammes</span>
        <nav>
        @foreach($gammes as $navigation)
            <li><a href="{{ route('admin.gammes', ['slug' => $navigation->name ]) }}">{{ str_replace('_', ' ', $navigation->name) }}</a></li>
        @endforeach
        </nav>
    </div>
</div>
