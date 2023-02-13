<?php
$items = getItems('customer');

//var_dump($items);

?>
<a href="customer.php?action=insert" class="btn btn-brown mb-3">Ajouter</a>
<div class="table-responsive">
    <table class="table table-bordered" id="datatable">
        <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($items as $item){
            echo '<tr>
                <td>' . $item['name'] . '</td>
                <td>' . $item['lastName'] . '</td>
                <td>' . $item['phone'] . '</td>
                <td><a href="mailto:' . $item['email'] . '">' . $item['email'] . '</a></td>
                <td>' . $item['street'] . '<br>' . $item['postalCode'] . ' - ' . $item['city'] . '</td>
                <td>
                    <a href="customer.php?action=update&id=' . $item['id'] . '" class="btn btn-sm btn-brown mb-3">Modifier</a>
                    <a href="customer.php?action=delete&id=' . $item['id'] . '" class="btn btn-sm btn-danger mb-3">Supprimer</a>
                </td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
</div>