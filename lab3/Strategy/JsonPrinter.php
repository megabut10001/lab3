<?php
namespace lr3\Strategy;
require_once 'IPrintable.php';

class JsonPrinter implements IPrintable {
    public function print(Item $item): string
    {
        return <<<JSON
"item": {
"title" : "{$item->getTitle()}",
"description":"{$item->getDescription()}",
"price" : "{$item->getPrice()}"
}
JSON;
    }
}