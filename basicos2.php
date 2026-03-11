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
sort($numeros); 
foreach($numeros as $key){
    echo $key . ", ";
}

// punto 9
echo "<hr>";
$numeros = [2, 10, 5, 1];
rsort($numeros);

foreach($numeros as $key){
    echo $key . ", ";
}

// punto 10 

echo "<hr>";

$palabras = ["PHP", "es", "genial"];

$palabras = implode(" " , $palabras);

var_dump($palabras);


// punto 11

echo "<hr>";

$texto = "rojo,verde,azul";

$texto = explode(",", $texto);

foreach($texto as $key){
    echo $key . " ";
}

// punto 12
echo "<hr>";

$numeros = [1,2,3,4,5,6];
$sum_pares = 0;
$pares= [];
foreach($numeros as $key){
    if ($key%2 == 0){
        $sum_pares += $key;
        $pares[] = $key;  
    }
}

echo $sum_pares;
echo "<br>";
foreach($pares as $key){
    echo "$key ";
}

//punto 13
echo "<hr>";
$palabras = ["sol", "computadora", "mesa", "programacion", "php"];

$contador = 0;
foreach($palabras as $key){
    if (strlen($key) > 5){
        $contador++;
    }
}
echo "Palabras largas: " . $contador;

// punto 14 

echo "<hr>";
$datos = [10, "hola", true, "php", 3.14, "codigo"];
$datos_limpios = array_filter($datos, fn($valor) =>  "string" == gettype($valor));

foreach($datos_limpios as $key){
    echo $key . " ";
}

// punto 15
echo "<hr>";

$notas = [4, 3, 5, 2, 4];

$suma = array_reduce($notas, fn($acumulado, $valor)=> $acumulado + $valor, 0);

echo "Promedio: " . $suma/ count($notas);

//Ejercicio Bonus
echo "<hr>";

$ventas = [120, 340, 90, 560, 230];

$suma = array_reduce($ventas, fn($contador, $valor)=> $contador + $valor, 0 );
echo "Total: " . $suma . "<br>";

echo "Promedio: " . $suma / count($ventas) . "<br>" ;

rsort($ventas);

echo "Mayor venta: " . $ventas[0] . "<br>";

sort($ventas);

echo "Menor venta: " . $ventas[0];

