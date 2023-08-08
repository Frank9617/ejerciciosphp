<?php
include_once './Controladores/procesar.php';


$objEmployee = new Employee(18,15);

echo $objEmployee->suma();
echo "<br>";
echo $objEmployee->resta();
echo "<br>";
echo $objEmployee->division();
echo "<br>";
echo $objEmployee->multiplicacion();
echo "<br>";
echo $objEmployee->potencia();




?>