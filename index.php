<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
      /*  echo 'No hay session';*/
    }else
    {
       /* echo 'si hay session';*/
    }
    include 'conexion.php';
    include 'clases.php';
    include 'home.php';
?>

<?php  include 'modulos/header.php' ?>
<div class="container" > 
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
            <form action="" method='POST'>
            <div class="form-group">
                    <label for="username">Nombre:</label>
                    <input class='form-control' name='username' placeholder='nombre' value='joyber' type="text">
            </div>
            <div class="form-group">
                    <label for="">Contraseña:</label>
                    <input class='form-control' name='password' placeholder='contraseña' value='1234' type="password">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>
            </form> 
        </div>
    </div>
<script>
    
</script>
    
</div>
<?php  include 'modulos/footer.php' ?>

