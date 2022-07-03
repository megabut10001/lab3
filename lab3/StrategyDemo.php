<?php
namespace lr3;
use lr3\Strategy\{Server, JsonPrinter, HTMLPrinter, Item};
require_once "Strategy/Server.php";
require_once "Strategy/HTMLPrinter.php";
require_once "Strategy/JsonPrinter.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategy</title>
</head>
<body>
    <h1>Патерн Стратегія</h1>
    <p>Патерн стратегія використовується для зміни поведімки компонентів програми під час її виконання.</p>
    <p>Реалізуємо клас сервер, який буде використовувати патерн стратегію для зміни формату виведення інформації</p>
    <?php
        $jsonPrinter = new JsonPrinter();
        $htmlPrinter = new HTMLPrinter();
        $item = new Item("iPhone 13 Pro", "The latest phone from Apple.", 1300*35);
        $server = new Server($htmlPrinter);
    ?>
    <h2>Вивід інформації за допомогою класу HTMLPrinter.</h2>
    <?=$server->printItem($item)?>
    <h2>Вивід інформації за допомогою класу JsonPrinter.</h2>
    <?php
    $server->setPrinter($jsonPrinter);
    echo $server->printItem($item);
    ?>
</body>
</html>
