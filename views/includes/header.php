<header>

        <div class="d-flex flex-column flex-md-row align-items-center p-0 px-md-4 mb-4 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="index.php?page=home"><img src="assets/images/logo.svg" width="100" height="100"></a>

        <form class="form-inline p-4">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
        <nav class="my-2 my-md-0 mr-md-3">
        <?php 
        if (!isset($_SESSION['connect'])) { ?>
            <a class="p-2 text-dark" href="index.php?page=connect">Connexion</a>
            <a class="p-2 text-dark" href="index.php?page=inscrire">S'inscrire</a>
            
        <?php } else { ?>
    <a class="p-2 text-dark" href="">Bonjour<?php echo " " . $_SESSION['name'];?></a>
            <a class="p-2 text-dark" href="index.php?page=logout">Deconnexion</a>
        <?php }; ?>
        </nav>
        </div>

<!--     <nav class="navbar my-2 my-md-0 mr-md-3 bg-light">
    <a class="navbar-brand my-0 mr-md-auto" href="index.php?page=home"><img src="assets/images/logo.svg" width="60" height="60"></a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="p-2 nav-link" href="index.php?page=connect" data-toggle="tab">connect</a>
                </li>
                <li class="nav-item">
                    <a class="p-2 nav-link" href="index.php?page=inscrire" data-toggle="tab">s'inscrire</a>
                </li>
            </ul>
    </nav> -->

</header>

