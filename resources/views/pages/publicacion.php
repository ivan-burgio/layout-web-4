<div class="main_contenido">
    <div class="main_principal">
        <div class="publicacion">
            <h1><?php echo $publicacion->titulo; ?></h1>
            <img src="<?php echo $publicacion->portada ?>" alt="<?php echo $publicacion->titulo; ?>" loading="lazy">
            <?php echo $publicacion->texto; ?>
        </div>

        <?php if($producto) { ?>
            <div class="producto">
                <img class="producto__img" src="<?php echo $producto->portada; ?>" alt="imagen <?php echo $producto->nombre; ?>">

                <div class="producto__info">
                    <div class="producto__info--section">
                        <p class="producto__info--section-p">Titulo:</p>
                        <p><?php echo $producto->nombre; ?></p>
                    </div>

                    <div class="producto__info--section">
                        <p class="producto__info--section-p">Lanzamiento:</p>
                        <p><?php echo $producto->fecha_lanzamiento; ?></p>
                    </div>

                    <div class="producto__info--section">
                        <p class="producto__info--section-p">Plataformas:</p>
                        <p><?php echo $producto->plataformas; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>