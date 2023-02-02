<?php

$customers = file_get_contents('../database/response_1675256819699.json');

if ($customers){
    $customers = json_decode($customers, JSON_OBJECT_AS_ARRAY);
    foreach ($customers as &$customer){
        if ($customer['id'] == $_GET['id']){
            unset($customer['id']);
            $customers = json_encode($customers);
            file_put_contents('../database/response_1675256819699.json', $customers);
            header('Location: ./liste.php?msg=del_ok');
            exit();
        }
    }
}



