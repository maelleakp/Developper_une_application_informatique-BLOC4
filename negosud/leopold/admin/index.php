<?php include ("../include/header.php"); ?>

<h1>Customers</h1>

<a href="customers/add.php" class="btn btn-brown mb-3">Ajouter</a>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <tr><th scope="row">3</th><td>Akpweh</td><td>Maelle3</td><td>maelle3@mail.fr</td><td>cesi1</td><td>1</td><td><a href="customers/update.php?id=3" class="btn btn-brown btn-sm">modifier</a><a href="customers/delete.php?id=3" class="btn btn-danger btn-sm">supprimer</a></td></tr><tr><th scope="row">5</th><td>Akpweh</td><td>Maelle5</td><td>maelle5@mail.fr</td><td>cesi1</td><td>1</td><td><a href="customers/update.php?id=5" class="btn btn-brown btn-sm">modifier</a><a href="customers/delete.php?id=5" class="btn btn-danger btn-sm">supprimer</a></td></tr><tr><th scope="row">9</th><td>Akpweh</td><td>Maelle9</td><td>maelle9@mail.fr</td><td>99</td><td>1</td><td><a href="customers/update.php?id=9" class="btn btn-brown btn-sm">modifier</a><a href="customers/delete.php?id=9" class="btn btn-danger btn-sm">supprimer</a></td></tr><tr><th scope="row">10</th><td>Akpweh</td><td>Maelle10</td><td>maelle10@mail.fr</td><td>cesi1</td><td>1</td><td><a href="customers/update.php?id=10" class="btn btn-brown btn-sm">modifier</a><a href="customers/delete.php?id=10" class="btn btn-danger btn-sm">supprimer</a></td></tr><tr><th scope="row">33</th><td>toto</td><td>toto</td><td>toto</td><td>toto</td><td>toto</td><td><a href="customers/update.php?id=33" class="btn btn-brown btn-sm">modifier</a><a href="customers/delete.php?id=33" class="btn btn-danger btn-sm">supprimer</a></td></tr>                    </tbody>
    </table>
</div>
<?php include ("../include/footer.php"); ?>