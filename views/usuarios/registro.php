

<h1>Registrarse</h1>


<?php
    //validacion si el registro fue establecito(SET) mediante "$_SESION" en el registro de usuario
    if(isset($_SESSION['register']) && $_SESSION['register']): ?>

        <strong> Registro Exitoso!</strong>

        <?php else: ?>

        <strong>Registro Fallido</strong>

    <?php endif; ?>

<!--
     <form  action="index.php?controller=usuario&action=save" method="POST"> 
    ......
    </form>
-->

<form action="<?=base_url?> usuario/save" method="POST">


            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required/>

            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required/>

            
            <label for="email">Email</label>
            <input type="text" name="email" required/>

            
            <label for="password">Contraseña</label>
            <input type="password" name="password" required/>

            
            
            <input type="submit" value="Registrarse" required/>


</form>














