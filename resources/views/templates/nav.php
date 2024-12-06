<nav class="nav nav-pills col text-center" id="nav-small">
    <img class="header__img-barras" src="/build/img/barras.svg" alt="imagen barras" id="nav-desple" loading="lazy">

    <div id="navContenido" class="d-none">
        <?php imprimirEnlace('/', 'Novedades'); ?>
        <?php imprimirEnlace('/videojuegos', 'Videojuegos'); ?>
        <?php imprimirEnlace('/tecnologia', 'Tecnologia'); ?>
        <?php imprimirEnlace('/entretenimiento', 'Entretenimiento'); ?>
        <?php imprimirEnlace('/anime', 'Anime'); ?>

        <!-- <div class=" nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Link</a></li>
            </ul>
            </div> -->

        <?php if ($url !== null) : ?>
            <form class="form-inline my-2 my-lg-0" method="POST">
                <input class="form-control" type="search" placeholder="Buscar en <?php echo $url; ?>" name="busqueda">
                <button class="btn-search" type="submit">
                    <i class="fa-solid fa-magnifying-glass" style="color: #FFFFFF;"></i>
                </button>
            </form>
        <?php endif; ?>
    </div>
</nav>

<nav class="nav nav-pills" id="nav-large" style="height: 6rem;">
    <?php imprimirEnlace('/', 'Novedades'); ?>
    <?php imprimirEnlace('/videojuegos', 'Videojuegos'); ?>
    <?php imprimirEnlace('/tecnologia', 'Tecnologia'); ?>
    <?php imprimirEnlace('/entretenimiento', 'Entretenimiento'); ?>
    <?php imprimirEnlace('/anime', 'Anime'); ?>

    <!-- <div class=" nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Link</a></li>
        </ul>
        </div> -->

    <?php if($search) : ?>
        <form class="form-inline my-2 my-lg-0" method="POST">
            <input class="form-control" type="search" placeholder="Buscar publicacion" name="busqueda">
            <button class="btn-search" type="submit">
                <i class="fa-solid fa-magnifying-glass" style="color: #FFFFFF;"></i>
            </button>
        </form>
    <?php endif; ?>
</nav>