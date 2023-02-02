<?php

if (isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['birthday']) && isset($_POST['postalCode']) && isset($_POST['city']) && isset($_POST['street'])) {
    
    $customers = file_get_contents('../database/response_1675256819699.json');
    $customers = json_decode($customers, JSON_OBJECT_AS_ARRAY);

    $customer=[];
    $customer['id'] = rand();
    $customer['name'] = htmlentities($_POST['name']);
    $customer['lastName'] = htmlentities($_POST['lastName']);
    $customer['phone'] = htmlentities($_POST['phone']);
    $customer['email'] = htmlentities($_POST['email']);
    $customer['birthday'] = htmlentities($_POST['birthday']);
    $customer['postalCode'] = htmlentities($_POST['postalCode']);
    $customer['city'] = htmlentities($_POST['city']);
    $customer['street'] = htmlentities($_POST['street']);

    $customers[] = $customer;

    $customers = json_encode($customers);
    file_put_contents('../database/response_1675256819699.json', $customers);

    header('Location: ./liste.php?msg=add_ok');
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">          
    <input placeholder="name" name="name" value="<?= $customer['name']?>">
    <input placeholder="lastName" name="lastName" value="<?= $customer['lastName']?>">
    <input placeholder="phone" name="phone" value="<?= $customer['phone']?>">
    <input placeholder="email" name="email" value="<?= $customer['email']?>">
    <input placeholder="birthday" name="birthday" value="<?= $customer['birthday']?>">
    <input placeholder="postalCode" name="postalCode" value="<?= $customer['postalCode']?>">
    <input placeholder="city" name="city" value="<?= $customer['city']?>">
    <input placeholder="street" name="street" value="<?= $customer['street']?>">
    <button type="submit" >Ajouter</button>
</form>
</body>
</html>