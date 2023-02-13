<?php

if(!isset($_GET['id'])){
    header('Location: customer.php?msg=500');
    exit();
}else{
    deleteById('customer', $_GET['id']);
    header('Location: customer.php?msg=upd_ok');
    exit();
}

