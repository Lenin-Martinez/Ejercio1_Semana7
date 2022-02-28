<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1_Semana 7</title>
</head>
<body>
    
<form method="post">
    <input type="text" name="num1" placeholder="Num1"><br><br>
    <input type="text" name="num2" placeholder="Num2"><br><br>
    <input type="text" name="num3" placeholder="Num3"><br><br>
    <input type="text" name="num4" placeholder="Num4"><br><br>
    <input type="text" name="num5" placeholder="Num5"><br><br>

    <input type="submit" name="Mostrar">
</form>






</body>
</html>


<?php  

if(isset($_POST["Mostrar"]))
{
    $Num1 = $_POST["num1"];
    $Num2 = $_POST["num2"]; 
    $Num3 = $_POST["num3"]; 
    $Num4 = $_POST["num4"]; 
    $Num5 = $_POST["num5"]; 
    
   ImprimirNumero($Num1, $Num2, $Num3, $Num4, $Num5);
}



function ImprimirNumero($Num1, $Num2, $Num3, $Num4, $Num5){
    if(empty($Num1))
    $Num1 = 0;
    
    if(empty($Num2))
    $Num2 = 0;

    if(empty($Num3))
        $Num3 = 0;
        
    if(empty($Num3))
    $Num3 = 0;

    if(empty($Num4))
        $Num4 = 0;
        
    if(empty($Num5))
    $Num5 = 0;

    echo "<br>La suma de los numeros es: " .($Num1 + $Num2 + $Num3 + $Num4 + $Num5);
}
?>