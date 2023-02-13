<?php

if(isset($_POST['name'])){

    $item = $_POST;
    $item['ordersP'] = null;
    $item['items'] = null;
    $item['id'] = rand();

    insertItem('provider', $item);

    header('Location: provider.php?msg=add_ok');
    exit();
}

?>
<a href="provider.php" class="btn btn-brown mb-3">Retour</a>
<form method="post" action="provider.php?action=insert">
    <div class="mb-3">
        <label class="form-label">domainName</label>
        <input name="domainName" type="text" class="form-control" value="domainName">
    </div>
    <div class="mb-3">
        <label class="form-label">name</label>
        <input name="name" type="text" class="form-control" value="name">
    </div>
    <div class="mb-3">
        <label class="form-label">lastName</label>
        <input name="lastName" type="text" class="form-control" value="lastName">
    </div>
    <div class="mb-3">
        <label class="form-label">phone</label>
        <input name="phone" type="text" class="form-control" value="phone">
    </div>
    <div class="mb-3">
        <label class="form-label">email</label>
        <input name="email" type="email" class="form-control" value="email@email.com">
    </div>
    <div class="mb-3">
        <label class="form-label">siret</label>
        <input name="siret" type="text" class="form-control" value="siret">
    </div>
    <div class="mb-3">
        <label class="form-label">webSite</label>
        <input name="webSite" type="text" class="form-control" value="webSite">
    </div>
    <div class="mb-3">
        <label class="form-label">postalCode</label>
        <input name="postalCode" type="text" class="form-control" value="postalCode">
    </div>
    <div class="mb-3">
        <label class="form-label">city</label>
        <input name="city" type="text" class="form-control" value="city">
    </div>
    <div class="mb-3">
        <label class="form-label">street</label>
        <input name="street" type="text" class="form-control" value="street">
    </div>
    <button type="submit" class="btn btn-brown">Enregistrer</button>
</form>
