<div class="navbar_left">
    <div class="title__navbar_left">Administration</div>
    <div class="sep"></div>
    <div class="navigation">
        <span class="title__navigation">Pages</span>
        <nav>
            <li class="active"><a href="#"><i class="fas fa-home" alt="Accueil"></i> Accueil</a></li>
            <li><a href="#"><i class="fas fa-envelope" alt="Contact"></i> Contact</a></li>
            <li><a href=""><i class="fas fa-spa" alt="Spa du cheveux"></i> Spa du cheveu</a></li>
            <li><a href=""><i class="fas fa-paint-brush" alt="Coloration"></i> Coloration</a></li>
        </nav>
    </div>
    <div class="sep"></div>
    <div class="navigation">
        <span class="title__navigation">Nos gammes</span>
        <nav>
            <li><a href="{{ route('admin.gammes', ['slug' => 'nature_inside']) }}"><i class="fas fa-tree" alt="Nature Inside"></i> Nature Inside</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'in_bloom']) }}"><i class="fas fa-sprout" alt="In Bloom"></i> In Bloom</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'sun']) }}"><i class="fas fa-sun" alt="Sun"></i> Sun</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'revitalisant']) }}"><i class="fas fa-heart" alt="Revitalizing"></i> Revitalizing</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'gentleman']) }}"><i class="fas fa-mars" alt="Gentleman"></i> Gentleman</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'coiffant_finition']) }}"><i class="fas fa-cut" alt="Coiffant et finition"></i> Coiffant et finition</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'couleur']) }}"><i class="fa-solid fa-brush"></i> Couleur</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'plante']) }}"><i class="fa-solid fa-leaf"></i> Plante</a></li>
            <li><a href="{{ route('admin.gammes', ['slug' => 'wellness']) }}"><i class="fa-solid fa-hands-holding-circle"></i> Wellness</a></li>
        </nav>
    </div>
</div>
