<?php


class ProductAttributes implements SelectType {

    protected $selectType;

    public function __construct(SelectType $selectType) {
        $this->selectType = $selectType;
    }

    public function inputSerializationArray(string $stringArray): array {
        return $this->selectType->inputSerializationArray($stringArray);
    }
}