<?php
  $json = file_get_contents('../database/response_1675256819699.json');
  $array = json_decode($json, true);
  
  session_start();
  
  // modification code
  if (isset($_POST['modify'])) {
    // modification logic here
    $_SESSION['notification'] = 'Modification effectuée';
  }
  
  // suppression code
  if (isset($_POST['delete'])) {
    // suppression logic here
    $_SESSION['notification'] = 'Suppression effectuée';
  }
  
  // affichage de la notification
  if (isset($_SESSION['notification'])) {
    echo $_SESSION['notification'];
    unset($_SESSION['notification']);
  }
?>

<!DOCTYPE html>
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
  <h2>Customer</h2>
  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th>Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Role Id</th>
      <th>Id</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($array as $item): ?>
    <tr>
      <td><?php echo $item['name']; ?></td>
      <td><?php echo $item['lastName']; ?></td>
      <td><?php echo $item['email']; ?></td>
      <td><?php echo $item['password']; ?></td>
      <td><?php echo $item['roleId']; ?></td>
      <td><?php echo $item['id']; ?></td>
      <td><button class="modify">Modifier</button></td>
      <td><button class="delete">Supprimer</button></td>
    </tr>
  <?php endforeach; ?>       
    </thead>
  </table>
</div>

</body>
</html>

