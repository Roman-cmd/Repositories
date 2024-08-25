<?php

namespace PrintText;

abstract class ViewText
{
    public string $text;

    public function getText(): void
    {
        print_r($this->text);
    }
    public function message() : void
    {
        print_r("$this->text\n");
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }
    abstract public function printText();
}