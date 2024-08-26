<?php
require_once('../../vendor/autoload.php');

$textPrinter = new \PrintText\Printer("Я принтер");
$textScreen = new \PrintText\Screen("Я экран");

//Первый способ

$textPrinter->message();
$textScreen->message();

//Второй способ

$textPrinter->printText();
$textScreen->printText();

//Третий способ

$textPrinter->setText("Принтер\n");
$textPrinter->getText();

$textScreen->setText("Экран\n");
$textScreen->getText();

//Четвертый способ
$text = "Привет";
$printer = new \PrintText\Printer($text);
$printer->message();
$screen = new \PrintText\Screen($text);
$screen->message();
