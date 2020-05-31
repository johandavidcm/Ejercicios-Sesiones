<?php
    require('./components/navbar.php')
?>

<div class="container my-5">
    <h1>Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
    <h1>Numero de visitas: <?php echo contador() ?></h1>
    <?php 
        if($_SESSION['rol'] == 1){
            ?>
            <div class="row mt-5">
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block">Actualizar Datos</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-secondary btn-block">Crear Usuario</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-danger btn-block">Eliminar Usuario</button>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="row mt-5">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">Actualizar Datos</button>
                </div>
            </div>
            <?php
        }
        function contador()
        {
            $archivo = "./resources/contador.txt"; //el archivo que contiene en numero
            $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
            if($f)
            {
                $contador = fread($f, filesize($archivo)); //leemos el archivo
                $contador = $contador + 1; //sumamos +1 al contador
                fclose($f);
            }
            $f = fopen($archivo, "w+");
            if($f)
            {
                fwrite($f, $contador);
                fclose($f);
            }
            return $contador;
        }
    ?>
    
</div>