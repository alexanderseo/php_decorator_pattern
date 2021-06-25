<?php
require_once 'SelectType.php';

class UnserializeInputString implements SelectType {

    public function inputSerializationArray(string $stringArray): array {
        return unserialize($stringArray);
    }

}