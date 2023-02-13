<?php

function getItems($type)
{
    $items = file_get_contents('../data/' . $type . '.json');
    if ($items) {
        $items = json_decode($items, JSON_OBJECT_AS_ARRAY);
        return $items;
    }

    return [];
}


function insertItem($type, $values)
{
    $items = getItems($type);
    $items[] = $values;
    updateFile($type, $items);
}

function getById($type, $id)
{
    $items = getItems($type);
    foreach ($items as $item) {
        if ($item['id'] == $id) {
            return $item;
        }
    }
}

function updateById($type, $id, $fields)
{
    $items = getItems($type);
    foreach ($items as &$item) {
        if ($item['id'] == $id) {
            foreach ($fields as $key => $value) {
                $item[$key] = $value;
            }
        }
    }

    updateFile($type, $items);
}

function deleteById($type, $id)
{
    $items = getItems($type);
    foreach ($items as $key => &$item) {
        if ($item['id'] == $id) {
            unset($items[$key]);
        }
    }
    updateFile($type, $items);
}


function updateFile($type, $items)
{
    $items = json_encode($items);
    file_put_contents('../data/' . $type . '.json', $items);
}