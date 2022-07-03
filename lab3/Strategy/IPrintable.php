<?php
namespace lr3\Strategy;
require_once "Item.php";

interface IPrintable {
    function print(Item $item): string;
}