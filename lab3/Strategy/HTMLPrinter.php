<?php
namespace lr3\Strategy;
require_once 'IPrintable.php';
class HTMLPrinter implements IPrintable {
    public function print(Item $item): string
    {
        return <<<HTML
<div style = "border: 1px solid black; text-align: center;width: 400px;">
    <h1>{$item->getTitle()}</h1>
    <p>{$item->getDescription()}</p>
    <h2>{$item->getPrice()} грн.</h2>
</div>
HTML;
    }
}