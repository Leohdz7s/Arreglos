<?php

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        // Mueve los elementos mayores que $key una posición adelante
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$numbers = [64, 34, 25, 12, 22, 11, 90];
$sorted = insertionSort($numbers);
echo "Arreglo ordenado mediante el método de Inserción: " . implode(', ', $sorted);

?>
