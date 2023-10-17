<?php
function seleccion($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex != $i) {
            list($array[$i], $array[$minIndex]) = array($array[$minIndex], $array[$i]);
        }
    }
    return $array;
}


$array = [100,64, 34, 25, 12, 22, 11, 90];
$arrayOrdenado = seleccion($array);
echo "Arreglo ordenado: " . implode(", ", $arrayOrdenado);
?>
