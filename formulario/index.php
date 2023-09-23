<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form method="post" autocomplete="off">
        <img src="imgs/logo.svg" alt="">
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-container">
                <input type="password" name="password" placeholder="contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
            
            <div class="input-container">
                <input type="tel" name="phone" placeholder="telefono">
                <i class="fa-solid fa-phone"></i>
            </div>
            <a href="#">Terminos & condiciones</a>
            <input name="send" type="submit" class="btn" value="Enviar">
        </div>
    </form>
    <?php
        include("send.php")
    ?>
</body>
</html>