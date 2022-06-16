<?php
include("procedimiento/cabecera.php");
?>
<?php
if ($_POST) {
    $digitos =$_POST ['num'];
    if (($digitos < 9)) {
        $imp="Tiene un digito";
    }
    if (($digitos>=10) and ($digitos <99)) {
        $imp="Tiene dos digitos";
    }
    if (($digitos >=100) and ($digitos <999)){
        $imp="Tiene tres digitos";
    };
    if (($digitos >=1000) and ($digitos <9999)){
        $imp="Tiene cuatro digitos";
    };
    if (($digitos >10000)){
        $imp="Demasiado Digitos";
    };
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<div class="container">
    <br>
        <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                   <h1>Cuantos  Digitos Tiene Un Numero</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Ingresar Numero:</label>
                    <input type="text" class="form-control" id="email" placeholder="Inserte Un Numero" name="num">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-success" name="accion" value="suma">Realizar Consulta</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Resultados N° Digitos</h3>
                  <input type="text" name="" id="" value="<?php echo$imp; ?>">
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>

<?php
include("procedimiento/body.php");
?>