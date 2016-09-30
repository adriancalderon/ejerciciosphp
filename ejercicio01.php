<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>ejemplo 5</title> 
</head><body>
<?php
echo "Inicializamos el array";
$array1[0] = "Alicia";
$array1[1] = "Andrea";
$array1[2] = "Juana";
$array1[3] = "Hermenegilda";
$array1[4] = "Graciana";

echo "<hr>Recorrido del bucle"; 
echo "<hr>";
foreach ($array1 as $element){ 
    echo $element . '<br>'; 
}  
?>
</body></html>

