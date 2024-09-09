<?php

use php_lvl_1\ListProduct;

require_once "ListProduct.php";

$masProduct = new ListProduct(5, 7, 5, 7, 5, 8); // Обьект класса ListProduct
print_r("Количество пар похожих товаров: " . $masProduct->countSimilarPairs());// Метод обьекта класса
