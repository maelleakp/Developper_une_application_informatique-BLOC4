<?php

if(!isset($_GET['id'])){
    header('Location: provider.php?msg=500');
    exit();
}else{
    deleteById('provider', $_GET['id']);
    header('Location: provider.php?msg=upd_ok');
    exit();
}

