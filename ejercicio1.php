<?php 
include("procedimiento/cabecera.php");
?>
<?php
if($_POST){
$num1=$_POST['var1'];
$num2=$_POST['var2'];
$accion=$_POST['accion'];

switch ($accion) {
 case "suma": 
 
 $res=$num1+$num2;

 break;
 case "resta":
   
    $res=$num1-$num2;
    
 break;
 case "multi":
    
    $res=$num1*$num2;

    break;

 case "divi":
    
    $res=$num1/$num2;
  
 break;
 
 default:
 echo "No existe";
}
}
?>
<div class="container">
    <br>
        <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                   <h1>Ejercicio 1</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Valor 1:</label>
                    <input type="text" class="form-control" id="email" placeholder="primer Valor" name="var1">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Valor 2:</label>
                    <input type="text" class="form-control" id="pwd" placeholder=" segundo Valor" name="var2">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-primary" name="accion" value="suma">Sumar</button>
                    <button type="submit" class="btn btn-success" name="accion" value="resta">Restar</button>
                    <button type="submit" class="btn btn-warning" name="accion" value="multi">Multiplicar</button>
                    <button type="submit" class="btn btn-dark" name="accion" value="divi">Dividir</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Resultado</h3>
                  <input type="text" name="" id="" value="<?php echo$res ?>">
                </div>
            </div>    

            </div>
            
        </div>
    </div>
<?php 
include("procedimiento/body.php");
?>
