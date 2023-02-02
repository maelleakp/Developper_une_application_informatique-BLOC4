<?php

$providers = file_get_contents('../database/response_1675256819699.json');

if ($providers){
    $providers = json_decode($providers, JSON_OBJECT_AS_ARRAY);
    foreach ($providers as $provider){
        if ($provider['id'] == $_GET['id']){
            unset($provider['id']);
            $providers = json_encode($providers);
            file_put_contents('../database/response_1675256819699.json', $providers);
            header('Location: ./liste.php?msg=del_ok');
            exit();
        }
    }
}



