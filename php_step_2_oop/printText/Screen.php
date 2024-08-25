<?php

namespace PrintText;

class Screen extends ViewText
{
    public string $screen = "Я есть экран";
    public function printText()
    {
        print_r("$this->screen\n");
    }


}