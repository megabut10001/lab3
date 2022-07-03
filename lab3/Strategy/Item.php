<?php
namespace lr3\Strategy;

class Item {
    private string $title;
    private string $description;
    private int $price;

    public function __construct(string $title, string $description, int $price) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): int {
        return $this->price;
    }
}