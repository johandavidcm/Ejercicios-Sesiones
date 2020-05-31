<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php 
        session_start();
        if(isset($_SESSION['usuario'])){
            require('./views/index.php');
        } else {
            require('./views/login.php'); 
        }
        require_once('./components/scripts.php'); 
    ?>
</body>

</html>