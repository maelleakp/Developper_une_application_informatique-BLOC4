<?php

if(isset($_POST['name'])){

    $item = $_POST;

    //$item['ordersP'] = null;
    //$item['items'] = null;
    $item['id'] = rand();

    insertItem('customer', $item);

    header('Location: customer.php?msg=add_ok');
    exit();
}

?>
<a href="customer.php" class="btn btn-brown mb-3">Retour</a>
<form method="post" action="customer.php?action=insert">
    <div class="mb-3">
        <label class="form-label">name</label>
        <input name="name" type="text" class="form-control" value="name">
    </div>
    <div class="mb-3">
        <label class="form-label">lastName</label>
        <input name="lastName" type="text" class="form-control" value="xxxx">
    </div>
    <div class="mb-3">
        <label class="form-label">phone</label>
        <input name="phone" type="text" class="form-control" value="xxxx">
    </div>
    <div class="mb-3">
        <label class="form-label">email</label>
        <input name="email" type="email" class="form-control" value="xxxx@xxxx.com">
    </div>
    <div class="mb-3">
        <label class="form-label">birthday</label>
        <input name="birthday" type="text" class="form-control" value="00/00/2020">
    </div>
    <div class="mb-3">
        <label class="form-label">postalCode</label>
        <input name="postalCode" type="text" class="form-control" value="xxxx">
    </div>
    <div class="mb-3">
        <label class="form-label">city</label>
        <input name="city" type="text" class="form-control" value="xxxx">
    </div>
    <div class="mb-3">
        <label class="form-label">street</label>
        <input name="street" type="text" class="form-control" value="xxxx">
    </div>
    <button type="submit" class="btn btn-brown">Enregistrer</button>
</form>
