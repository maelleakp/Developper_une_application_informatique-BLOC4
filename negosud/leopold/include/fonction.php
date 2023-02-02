<?php
function getItems($type){
    $items = file_get_contents("../data/" .$type. ".json");

    if ($items){
        $items = json_decode($items, JSON_OBJECT_AS_ARRAY);
        return $items;

    }

    return [];
}
