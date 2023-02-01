<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
  <thead>
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
    <?php
$json = '[
    {
      "name": "Akpweh",
      "lastName": "Maëlle",
      "email": "maelle@mail.fr",
      "password": "cesi1",
      "roleId": 0,
      "id": 1
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle2",
      "email": "maelle2@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 2
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle3",
      "email": "maelle3@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 3
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle4",
      "email": "maelle4@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 4
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle5",
      "email": "maelle5@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 5
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle6",
      "email": "maelle6@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 6
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle7",
      "email": "maelle7@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 7
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle8",
      "email": "maelle8@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 8
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle9",
      "email": "maelle9@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 9
    },
    {
      "name": "Akpweh",
      "lastName": "Maelle10",
      "email": "maelle10@mail.fr",
      "password": "cesi1",
      "roleId": 1,
      "id": 10
    }
]';

$array = json_decode($json, true);

foreach ($array as $item) {
    echo "Nom : " . $item['name'] . "\n";
    echo "Nom de famille : " . $item['lastName'] . "\n";
    echo "Email : " . $item['email'] . "\n";
    echo "Mot de passe : " . $item['password'] . "\n";
    echo "ID du rôle : " . $item['roleId'] . "\n";
    echo "ID : " . $item['id'] . "\n";
    echo "\n";
    echo '<button class="modify">Modifier</button>';
    echo '<button class="delete">Supprimer</button>';
    echo '</td>';
    echo '</tr>';
}

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

      </tbody>
    </table>
  </body>
</html>

