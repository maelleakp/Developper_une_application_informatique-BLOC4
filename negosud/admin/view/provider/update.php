<?php

if(!isset($_GET['id'])){
    header('Location: provider.php?msg=500');
    exit();
}

if(isset($_POST['name'])){
    updateById('provider', $_GET['id'], $_POST);
    header('Location: provider.php?msg=upd_ok');
    exit();
}

$item = getById('provider', $_GET['id']);

?>
<a href="provider.php" class="btn btn-brown mb-3">Retour</a>
<form method="post" action="provider.php?action=update&id=<?= $_GET['id']; ?>">
    <div class="mb-3">
        <label class="form-label">domainName</label>
        <input name="domainName" type="text" class="form-control" value="<?= $item['domainName']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">name</label>
        <input name="name" type="text" class="form-control" value="<?= $item['name']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">lastName</label>
        <input name="lastName" type="text" class="form-control" value="<?= $item['lastName']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">phone</label>
        <input name="phone" type="text" class="form-control" value="<?= $item['phone']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">email</label>
        <input name="email" type="email" class="form-control" value="<?= $item['email']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">siret</label>
        <input name="siret" type="text" class="form-control" value="<?= $item['siret']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">webSite</label>
        <input name="webSite" type="text" class="form-control" value="<?= $item['webSite']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">postalCode</label>
        <input name="postalCode" type="text" class="form-control" value="<?= $item['postalCode']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">city</label>
        <input name="city" type="text" class="form-control" value="<?= $item['city']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">street</label>
        <input name="street" type="text" class="form-control" value="<?= $item['street']; ?>">
    </div>
    <button type="submit" class="btn btn-brown">Modifier</button>
</form>


