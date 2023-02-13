<?php
$items = getItems('provider');
?>
<a href="provider.php?action=insert" class="btn btn-brown mb-3">Ajouter</a>
<div class="table-responsive">
    <table class="table table-bordered" id="datatable">
        <thead>
        <tr>
            <th scope="col">Domaine</th>
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
                <td><strong>' . $item['domainName'] . '</strong> <br> ' . $item['siret'] . ' <br> ' . $item['webSite'] . '</td>
                <td>' . $item['name'] . '</td>
                <td>' . $item['lastName'] . '</td>
                <td>' . $item['phone'] . '</td>
                <td><a href="mailto:' . $item['email'] . '">' . $item['email'] . '</a></td>
                <td>' . $item['street'] . '<br>' . $item['postalCode'] . ' - ' . $item['city'] . '</td>
                <td>
                    <a href="provider.php?action=update&id=' . $item['id'] . '" class="btn btn-sm btn-brown mb-3">Modifier</a>
                    <a href="provider.php?action=delete&id=' . $item['id'] . '" class="btn btn-sm btn-danger mb-3">Supprimer</a>
                </td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
</div>