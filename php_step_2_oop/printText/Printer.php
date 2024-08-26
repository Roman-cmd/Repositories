<?php

namespace PrintText;

class Printer extends ViewText
{
    public string $printer = "Я есть принтер";

    public function printText()
    {
        print_r("$this->printer\n");
    }


}