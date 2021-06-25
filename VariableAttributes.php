<?php
require_once 'ProductAttributes.php';

class VariableAttributes extends ProductAttributes {

    public function inputSerializationArray(string $stringArray): array {
        $attributes = parent::inputSerializationArray($stringArray);
        $data = [];
        foreach ($attributes as $item) {
            if ($item['is_variation'] == '1') {
                $data['variable'][$item['name']] = $item['name'];
            }
        }

        return $data;
    }
}