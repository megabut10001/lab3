<?php
namespace lr3\Strategy;
require_once "IPrintable.php";
class Server {
    private IPrintable $printer;

    public function __construct(IPrintable $printer)
    {
        $this->printer = $printer;
    }

    public function setPrinter(IPrintable $printer): void {
        $this->printer = $printer;
    }

    public function printItem(Item $item): string {
        return $this->printer->print($item);
    }
}