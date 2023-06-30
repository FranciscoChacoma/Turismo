<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas - Villa Carlos Paz - Turismo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post">
        <h2>
        Consulta
        </h2>


        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Dirección">
            
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            
        </div>

        <div class="input-wrapper">
            <input type="text" name="password" placeholder="Consulta">
            
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">

    </form>
    <?php
    include("registrar.php")
    ?>
</body>
</html>