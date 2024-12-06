<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php if (empty($publis1)) { ?>
                <p>No hay publicaciónes de esta categoria creadas.</p>
            <?php } ?>

            <?php
                foreach ($publis1 as $publi) {
                    echo tarjetaClasicaTemplate($publi);
                }
            ?>
        </div>
    </div>
</div>

<div class="main_principal" loading="lazy">
    <h3><?php echo $tituloExtra1; ?></h3>

    <div class="novedades-extra">
        <?php
            foreach ($extras1 as $extra) {
                echo tarjetaAltTemplate($extra);
            }
        ?>
    </div>
</div>

<div class="main_contenido">
    <div class="main_principal">
        <div class="tarjetas">
            <?php
                foreach ($publis2 as $publi) {
                    echo tarjetaClasicaTemplate($publi);
                }
            ?>
        </div>
    </div>
</div>

<div class="main_principal" loading="lazy">
    <h3><?php echo $tituloExtra2; ?></h3>

    <div class="novedades-extra">
        <?php
            foreach ($extras2 as $extra) {
                echo tarjetaAltTemplate($extra);
            }
        ?>
    </div>
</div>

<div class="main_contenido">
    <div class="main_principal">
        <div class="tarjetas">
            <?php
                foreach ($publis3 as $publi) {
                    echo tarjetaClasicaTemplate($publi);
                }
            ?>
        </div>
    </div>
</div>