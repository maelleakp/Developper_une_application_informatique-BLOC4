<?php
include('../include/header.php');

echo '<h1>Article</h1>';

if(isset($_GET['action'])){

    switch ($_GET['action']){
        case 'insert':
            include('view/provider/insert.php');
            break;
        case 'update':
            include('view/provider/update.php');
            break;
        case 'delete':
            include('view/provider/delete.php');
            break;
        default:
            include('view/provider/index.php');
            break;
    }

}else{
    include('view/provider/index.php');
}

include('../include/footer.php');

?>
<?php include('../include/footer.php'); ?>