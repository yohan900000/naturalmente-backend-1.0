<div class="navigation">
    <li class="active"><a href="{{ route('index') }}">Accueil</a></li>
    <li><a href="{{ route('coloration') }}">Coloration</a></li>
    <li class="sub">Nos gammes
        <ul class="submenu">
            <li><a href="{{ route('gammes', ['slug' => 'nature_inside']) }}">nature inside</a></li>
            <li><a href="{{ route('gammes', ['slug' => 'in_bloom']) }}">in bloom</a></li>
            <li><a href="{{ route('gammes', ['slug' => 'sun']) }}">sun</a></li>
            <li><a href="{{ route('gammes', ['slug' => 'revitalisant']) }}">revitalizing</a></li>
        </ul>
    </li>
    <li><a href="{{ route('gammes', ['slug' => 'coiffant_finition']) }}">Coiffant et finition</a></li>
    <li><a href="{{ route('spa-hair') }}">Spa du cheveu</a></li>
    <li><a href="{{ route('gammes', ['slug' => 'gentleman']) }}">Gentleman</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</div>
@if (isset($error))
<div id="container">
    <div class="alert alert-danger" style="margin-bottom: 20px">
        <i class="fa-solid fa-circle-xmark error"></i>
        <div class="text">
            <b>Une erreur est survenue</b>
            {{ $error }}
        </div>
    </div>
</div>
@endif
