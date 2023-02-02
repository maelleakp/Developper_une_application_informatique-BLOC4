<?php

$providers = file_get_contents('../database/response_1675327340429.json');

if ($customers){
  $providers = json_decode($providers, JSON_OBJECT_AS_ARRAY);

  foreach ($providers as $provider){
    if ($provider['id'] == $_GET['id']){

      if (isset($_POST['name'])) {
        
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

        $providers = json_encode($providers);
        file_put_contents('../database/response_1675327340429.json', $providers);

        header('Location: ./liste.php?msg=add_ok');
        exit();
      }
      ?>
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
      <button type="submit" >Modifier</button>
    </form>

    <?php 

      break;

    }
  }
}


