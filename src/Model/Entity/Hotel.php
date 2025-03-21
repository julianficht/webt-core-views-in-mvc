<?php
namespace Julianfichtinger\WebtCoreViewsInMvc\Model\Entity;
class Hotel {
    public function __construct(private string $name, private string $description) {}
    public function getName(): string {
        return $this->name;
    }
    public function getDescription(): string {
        return $this->description;
    }
}

