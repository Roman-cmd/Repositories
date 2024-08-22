<?php
$masstr = array(
    "Вагонетка",
    "Вьючный",
    "Задыхаться",
    "Икрометание",
    "Подтелок",
    "Полосатый",
    "Полшага",
    "Проездиться",
    "Пустословить",
    "Рахит"
);
$subString = "о";
$A = [];
$B = [];
foreach($masstr as $item) {
    if(strstr($item, $subString)) {
        $A[] = $item;
    }else{
        $B[] = $item;
    }
}
$A = implode(" ", $A);
$B = implode(" ", $B);
echo "$A\n";
echo $B;