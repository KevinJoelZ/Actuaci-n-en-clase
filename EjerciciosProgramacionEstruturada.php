<?php

//Suma de dos números
$num1 = 5;
$num2 = 10;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma";

//Condicionales
$num = -5;

if ($num > 0) {
    echo "$num es positivo";
} elseif ($num < 0) {
    echo "$num es negativo";
} else {
    echo "$num es cero";
}

//Ciclo For
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}


//Ciclo While
$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

//Tablas de multiplicar
$num = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "<br>";
}

//Factorial de un número
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "El factorial de $num es: $factorial";

//Números primos
$num = 17;
$esPrimo = true;

if ($num < 2) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo "$num es un número primo";
} else {
    echo "$num no es un número primo";
}

//Array y bucles
$array = array(1, 2, 3, 4, 5);

foreach ($array as $valor) {
    echo $valor . "<br>";
}

//Ordenar un array
$array = array(5, 3, 8, 1, 2);
sort($array);

foreach ($array as $valor) {
    echo $valor . "<br>";
}

//Máximo de un array
$array = array(1, 3, 5, 2, 4);
$max = max($array);

echo "El valor máximo en el array es: $max";

//Mínimo de un array
$array = array(1, 3, 5, 2, 4);
$min = min($array);

echo "El valor mínimo en el array es: $min";

//Contar elementos de un array
$array = array(1, 3, 5, 2, 4);
$count = count($array);

echo "El número de elementos en el array es: $count";

//Sumar elementos de un array
$array = array(1, 3, 5, 2, 4);
$sum = array_sum($array);

echo "La suma de los elementos en el array es: $sum";

//Promedio de elementos de un array
$array = array(1, 3, 5, 2, 4)
$sum = array_sum($array);
$count = count($array);
$average = $sum / $count;

echo "El promedio de los elementos en el array es: $average";

//Encontrar valor en un array
$array = array(1, 3, 5, 2, 4)
$value = 3;

if (in_array($value, $array)) {
    echo "$value se encuentra en el array";
} else {
    echo "$value no se encuentra en el array";
}

//Eliminar duplicados de un array
$array = array(1, 3, 5, 2, 4, 2, 3, 1);
$unique_array = array_unique($array);

foreach ($unique_array as $valor) {
    echo $valor . "<br>";
}

//Invertir un array
$array = array(1, 3, 5, 2, 4);
$reversed_array = array_reverse($array);

foreach ($reversed_array as $valor) {
    echo $valor . "<br>";
}

//Concatenar arrays
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$concatenated_array = array_merge($array1, $array2);

foreach ($concatenated_array as $valor) {
    echo $valor . "<br>";
}

//Dividir una cadena en un array
$string = "uno,dos,tres,cuatro";
$array = explode(",", $string);

foreach ($array as $valor) {
    echo $valor . "<br>";
}

//Generar números aleatorios únicos
$min = 1;
$max = 100;
$count = 10;

if ($count > ($max - $min + 1)) {
    echo "No se pueden generar $count números únicos en el rango $min-$max.";
} else {
    $numbers = array();

    while (count($numbers) < $count) {
        $num = rand($min, $max);
        if (!in_array($num, $numbers)) {
            $numbers[] = $num;
        }
    }

    foreach ($numbers as $number) {
        echo $number . "<br>";
    }
}

?>