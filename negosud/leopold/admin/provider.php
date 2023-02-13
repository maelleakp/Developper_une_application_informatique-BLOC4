<?php 

include("../include/header.php"); 

$items = getItems("provider");

//var_dump($items);
?>

<h1>Fournisseur</h1>
    <a href="customers/add.php" class="btn btn-brown mb-3">Ajouter</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Domaine</th>
                    <th scope="col">Email</th>
                    <th scope="col">Code postal</th>
                    <th scope="col">Ville</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                
                foreach ($items as $item){

                    echo '<tr>
                    <td><strong>'. $item['domainName'].' </strong><br> '. $item['siret'].' <br> '. $item['webSite'].' </td>
                    <td>'. $item['name'].'</td>
                    <td>'. $item['lastName'].'</td>
                    <td>'. $item['phone'].'</td>
                    <td><a href="mailto:'. $item['email'].'">'. $item['email'].'</a></td>
                    <td>'. $item['street'].' <br> '. $item['postalCode'].' - '. $item['city'].'</td>
                    <td></td>
                </tr>';
                }
                
            
                
                ?>
                
                </tbody>
            </table>
        </div>
        
<?php include("../include/footer.php"); ?>