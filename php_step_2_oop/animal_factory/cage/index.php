<?php
require_once('../../../vendor/autoload.php');
$beast = new \AnimalFactory\cage\Beast(4, 1, 0);
$fish = new \AnimalFactory\cage\Fish(0, 1, 0);
echo "$beast\n";
echo "$fish\n";