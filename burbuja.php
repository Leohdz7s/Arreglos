<?php
function burbuja($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
            
                list($array[$j], $array[$j + 1]) = array($array[$j + 1], $array[$j]);
            }
        }
    }
    return $array;
}

$array = [64, 34, 25, 12, 22, 11, 90];
$arrayOrdenado = burbuja($array);
echo "Arreglo ordenado: " . implode(", ", $arrayOrdenado);
?>
