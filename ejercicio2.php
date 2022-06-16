<?php
include("procedimiento/cabecera.php");
?>
<?php

if($_POST) {
     $cantidad = $_POST['var1'];
    $valor = $_POST['var2'];
    $valorT = $cantidad * $valor;
    $des1 = 0.20;
    $des2 = 0.10;



   if ($cantidad >= 3){
    $valord1 = $valorT * $des1;
    $valortd = $valorT - $valord1;
   }

   if ($cantidad < 3){
    $valord2 = $valorT * $des2;
    $valortd = $valorT - $valord2;
   }
}
?>




<div class="container">
    <br>
        <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                   <h1>Ejercicio 2</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Numero de Camisas</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite la cantidad de Camisas" name="var1">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Precio de Camiasa</label>
                    <input type="text" class="form-control" id="pwd" placeholder="35000 minimo" name="var2">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-dark" name="accion" value="divi">Comprar</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Valor Total a Pagar</h3>
                  <input type="text" name="" id="" value="<?php echo$valortd ?>">
                </div>
            </div>    

            </div>
            
        </div>
    </div>
<?php 
include("procedimiento/body.php");
?>