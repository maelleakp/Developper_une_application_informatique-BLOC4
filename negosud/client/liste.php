<?php

$customers = file_get_contents('../database/response_1675256819699.json');
$array = json_decode($customers, true);

session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  
  <h2>Client</h2>
    <a href="add.php">Ajouter</a>
    <table class="table">
      <thead class="thead-dark">
      <tr>
        <th>Name</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Date de naissance</th>
        <th>Code Postal</th>
        <th>Ville</th>
        <th>Rue</th>
        <th>Id</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($array as $item): ?>
      <tr>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['lastName']; ?></td>
        <td><?php echo $item['phone']; ?></td>
        <td><?php echo $item['email']; ?></td>
        <td><?php echo $item['birthday']; ?></td>
        <td><?php echo $item['postalCode']; ?></td>
        <td><?php echo $item['city']; ?></td>
        <td><?php echo $item['street']; ?></td>
        <td><?php echo $item['id']; ?></td>
        <td><a href="modif.php?id=<?= $item['id'] ?>">Modifier</a></td>
        <td><a href="delete.php?id=<?= $item['id'] ?>">Supprimer</a></td>
      </tr>
      <?php endforeach; ?>       
      </thead>
    </table>
</div>

<?php
if (isset($_GET['msg'])){
    switch ($_GET['msg']){
        case 'del.ok' : 
            echo 'Suppression ok';
            break;
            
        case 'upd.ok' : 
            echo 'Modification ok';
            break;
        
        case 'add.ok' : 
            echo 'Ajout ok';
            break;
    }
}
?>
</body>
</html>

