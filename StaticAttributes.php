<?php
require_once 'ProductAttributes.php';

class StaticAttributes extends ProductAttributes {

    public function inputSerializationArray(string $stringArray): array {
        $attributes = parent::inputSerializationArray($stringArray);
        $data = [];
        foreach ($attributes as $item) {
            if ($item['is_visible'] == '1') {
                $data['static'][$item['name']] = $item['name'];
            }
        }

        return $data;
    }
}