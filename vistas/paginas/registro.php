<h1 class="tituloPagina">Registrate</h1>

<div class="contacto">

    <form action="" method="post" class="formulario">
        
            <p>
                <label for="nombre">Nombre de Usuario:</label>
                <input type="text" name="registroNombre" id="nombre">
            </p>
            <p>
                <label for="email">Tu Email:</label>
                <input type="text" name="registroEmail" id="email">
            </p>
            <p>
                <label for="pwd">Elige la Contraseña</label>
                <input type="password" name="registroPassword" id="pwd">
            </p>
        

            <?php
                $registro = ControladorFormularios::ctrRegistro();

                ?>
           <p class="boton">
            <input type="submit" name="" id="enviar" value="enviar">
        </p>

        </form>
    </div>