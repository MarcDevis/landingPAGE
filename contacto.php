<?php
    include 'header.php';
    if(isset($_GET['status'])){
        $status = $_GET['status'];
        $msg = $_GET['msg'];
            ?>

    <div class="mensaje contenedor <?php echo $status; ?>">
        <p><?php echo $msg ?></p>
</div>

        <?php
    }
?>
<h1>Contacto</h1>
<main>
<section>
            <form class="formulario" action="create_contact.php" method="POST">
                <fieldset>
                    <legend>Contáctame enviando tus datos</legend>
                    <div class=".contenedor-campos">
                        <div class="campo">
                            </div>
                                <label for="Nombre">Nombre</label>
                                <input class="input-text"  type="text" name="nombre" placeholder="Tu nombre">
                            </div>
                        </div>
                        <div class="campo">
                            </div>
                                <label for="">Telefono</label>
                                <input class="input-text"  type="tel" name="telefono" id="" placeholder="Tu Telefono">
                            <div>
                            <div>
                            <div class="campo">
                                <div>
                                <label for="">Correo</label>
                                <input class="input-text"  type="email" name="correo" id="" placeholder="Tu correo">
                            </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Mensaje</label>
                            <textarea  id="" cols="112" rows="10" name="mensaje"></textarea  >
                            <div>
                        <div>
                        <div>
                            <input class="input-text"  class="boton" type="submit" value="Enviar">
                        </div>
                    </div>
                </fieldset>

            </form>
        </section>
</main>
<?php
        include 'footer.php';
    ?>