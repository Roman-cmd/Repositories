<?php

namespace php_lvl_1;

class ListProduct
{
    private array $masses;
    public function __construct(int ...$masses)
    {
        $this->masses = $masses;
    }
    function countSimilarPairs() : int|float
    {
        $massCount = [];// Создаем массив для подсчета количества товаров с одинаковой массой
        $totalPairs = 0;//Переменная для подсчета количества пар.

        // Подсчитываем количество товаров с каждой массой
        //Перебираем переданный в конструктор массив
        foreach ($this->masses as $mass) {
            if (!isset($massCount[$mass])) { //Проверяем обьявленно значение или нет. Если обьялвена но не определенна меняем
                                             //на true при помощи ! и устанавливаем ключ значение, значение - количество одинаковых масс
                $massCount[$mass] = 0; // Устанавливаем значение на 0
            }
            $massCount[$mass]++; //и сразу увеличиваем на 1. Получаем key->value, key- масса value-сколько раз встретилась
        }

        // Вычисляем количество пар для каждой массы
        foreach ($massCount as $count) {
            if ($count > 1) {
                $totalPairs += ($count * ($count - 1)) / 2; // Применяем формулу для подсчета пар каждой массы
            }
        }

        return $totalPairs;
    }
}
//Можно обойтись без конструктора с передачей параметра в  функцию или с использованием _get. Но имеет ли смысл не понятно.