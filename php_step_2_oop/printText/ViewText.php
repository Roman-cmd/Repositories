<?php

namespace PrintText;

abstract class ViewText
{
    public string $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): void
    {
        print_r($this->text);
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function message() : void
    {
        print_r("$this->text\n");
    }


    abstract public function printText();
}