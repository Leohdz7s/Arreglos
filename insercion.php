<?php
function insercion($array) {
    $length = count($array);
    for ($i = 1; $i < $length; $i++) {
        $key = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}


$array = [14, 21, 13, 5, 7, 25];
$arrayOrdenado = insercion($array);
echo "Arreglo ordenado: " . implode(", ", $arrayOrdenado);
?>





































afd 841 a