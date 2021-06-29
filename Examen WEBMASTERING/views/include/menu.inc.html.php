<nav class="navbar navbar-expand-sm navbar-light bg-danger">
    <a class="navbar-brand text-light" href="#">GB</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-light" href="<?php WEB_ROOT."?controller=security&page=accueil.admin"?>" > Acceuil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="<?php echo WEB_ROOT."?controller=security&page=login"?>" > Connexion <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="<?php echo WEB_ROOT."?controller=security&page=register"?>" >Inscription <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo WEB_ROOT."?controller=security&page=show.user"?>">Lister les utilisateurs</a>
            </li>
        </ul>
    </div>
</nav>