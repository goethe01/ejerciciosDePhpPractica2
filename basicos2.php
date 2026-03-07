<?php
//punto 1
$numeros = [4,7,2,9,5];
echo "La suma es: " . array_sum($numeros);
echo "<hr>";

//punto 2
echo "El número mayor es: " . max($numeros);
echo "<hr>";

//punto 3
echo "El número menor es: " . min($numeros);
echo "<hr>";

//punto 4
$frutas = ["manzana", "pera", "manzana", "banana", "pera", "manzana"];

foreach(array_count_values($frutas) as $key => $values){
    echo $key . " => " . $values . "<br>";
}
echo "<hr>";
// punto 5
$numeros = [5, 12, 8, 20, 3, 15];

$filtrados = array_filter( $numeros, fn($num) => $num > 10);
foreach($filtrados as $key){
    echo $key ."<br>";
}
echo "<hr>";
// punto 6 

$numeros = [2, 3, 4, 5];
$cuadrados = array_map(fn($num) => $num**2, $numeros);

foreach($cuadrados as $key){
    echo $key . "<br>";
}
echo "<hr>";

// punto 7
$colores = ["rojo", "verde", "azul"];
$buscar = "verde";
if (in_array($buscar, $colores)){
    echo "El color existe en el array";
}else {
    echo "El color no existe en el array";
}

// punto 8
echo "<hr>";
$numeros = [9, 3, 7, 1, 6];
sort($numeros,); 
foreach($numeros as $key){
    echo $key;
}