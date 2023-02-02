<?php

if (isset($_POST['domainName']) && isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['siret']) && isset($_POST['webSite']) && isset($_POST['postalCode']) && isset($_POST['city']) && isset($_POST['street'])) {
    
    $providers = file_get_contents('../database/response_1675327340429.json');
    $providers = json_decode($providers, JSON_OBJECT_AS_ARRAY);

    $provider=[];
    $provider['id'] = rand();
    $provider['domainName'] = htmlentities($_POST['domainName']);
    $provider['name'] = htmlentities($_POST['name']);
    $provider['lastName'] = htmlentities($_POST['lastName']);
    $provider['phone'] = htmlentities($_POST['phone']);
    $provider['email'] = htmlentities($_POST['email']);
    $provider['siret'] = htmlentities($_POST['siret']);
    $provider['webSite'] = htmlentities($_POST['webSite']);
    $provider['postalCode'] = htmlentities($_POST['postalCode']);
    $provider['city'] = htmlentities($_POST['city']);
    $provider['street'] = htmlentities($_POST['street']);

    $providers[] = $provider;

    $providers = json_encode($providers);
    file_put_contents('../database/response_1675327340429.json', $providers);

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
    <input placeholder="domainName" name="domainName" value="<?= $provider['domainName']?>">
    <input placeholder="name" name="name" value="<?= $provider['name']?>">
    <input placeholder="lastName" name="lastName" value="<?= $provider['lastName']?>">
    <input placeholder="phone" name="phone" value="<?= $provider['phone']?>">
    <input placeholder="email" name="email" value="<?= $provider['email']?>">
    <input placeholder="siret" name="siret" value="<?= $provider['siret']?>">
    <input placeholder="webSite" name="webSite" value="<?= $provider['webSite']?>">
    <input placeholder="postalCode" name="postalCode" value="<?= $provider['postalCode']?>">
    <input placeholder="city" name="city" value="<?= $provider['city']?>">
    <input placeholder="street" name="street" value="<?= $provider['street']?>">
    <button type="submit" >Ajouter</button>
</form>
</body>
</html>