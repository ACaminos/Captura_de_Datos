<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariel Caminos</title>
</head>
<body>
<h2>Práctica 5</h2>
<hr>
<br>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Campo de entrada: <input type="text" name="campo">
        <input type="submit" name="Enviar">
    </form>
    <br><hr><br>
    <?php
        $texto= $_POST['campo'];
        for ($i=0; $i <10 ; $i++) { 
            echo "$texto"."<br>";
        }
    ?>
    <br><hr><br>
</body>
</html>
