<?php
function bubbleSort(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            // Сравниваем строки
            if ($array[$j] > $array[$j + 1]) {
                // Меняем местами, если порядок неправильный
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

// Пример использования
$array = ["banana", "apple", "orange", "grape"];
bubbleSort($array);

// Вывод отсортированного массива
print_r($array);