<?php
require_once "Subarray.php";
$subarray = new Subarray(-2, 1, -3, 4, -1, 2, 1, -5, 4);
echo "Максимальная сумма: " . $subarray->maxSubarraySum() . PHP_EOL;
