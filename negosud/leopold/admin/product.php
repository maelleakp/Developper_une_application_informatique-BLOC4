<?php 

include("../include/header.php"); 

$items = getItems("article");

//var_dump($items);
?>

<h1>Article</h1>
    <a href="customers/add.php" class="btn btn-brown mb-3">Ajouter</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Appellation</th>
                    <th scope="col">Type de vin</th>
                    <th scope="col">Millésime</th>
                    <th scope="col">Région</th>
                    <th scope="col">Prix unitaire</th>
                    <th scope="col">Prix carton</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Référence</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                
                foreach ($items as $item){

                    echo '<tr>
                    <td>'. $item['name'].'</td>
                    <td>'. $item['appellation'].'</td>
                    <td>'. $item['wineType'].'</td>
                    <td>'. $item['year'].'</td>
                    <td>'. $item['region'].'</td>
                    <td>'. $item['unitPrice'].'</td>
                    <td>'. $item['boxPrice'].'</td>
                    <td>'. $item['volume'].'</td>
                    <td>'. $item['quantity'].'</td>
                    <td>'. $item['ref'].'</td>
                    <td></td>
                </tr>';
                }
                
            
                
                ?>
                
                </tbody>
            </table>
        </div>
        
<?php include("../include/footer.php"); ?>
        
<?php include("../include/footer.php"); ?>