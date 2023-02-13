<?php
include('../include/header.php');

echo '<h1>Clients</h1>';

if(isset($_GET['action'])){

    switch ($_GET['action']){
        case 'insert':
            include('view/customer/insert.php');
            break;
        case 'update':
            include('view/customer/update.php');
            break;
        case 'delete':
            include('view/customer/delete.php');
            break;
        default:
            include('view/customer/index.php');
            break;
    }

}else{
    include('view/customer/index.php');
}

include('../include/footer.php');

?>