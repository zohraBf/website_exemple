<?php
$bo= '../css/bootstrap.css';
$st= '../css/style.css';
$fa= '../css/all.css';
$jq= '../js/jQuery.js';
$bu= '../js/bootstrap.bundle.js';
?>
<?php require '../include/connexion.php'; ?>
<?php 
$id= $_GET['id'];
    $req = $db->prepare('select * from stagiaires where id=?');
    $req->execute([$id]);
    $data = $req->fetch();
if(isset($_POST["submit"])){
    $nom = $_POST['nom'];
    $req = $db->prepare('update stagiaires set nom=? where id=?');
    $req->execute([$nom,$id]);
    header('location: /stagiaire/index.php?message=updated');
}
?>

<?php include '../include/header.php'; ?>
<?php include '../include/nav.php'; ?>

    <div class="container">
        <h1 class="text-center">Liste des stagiaires</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                <label for="nom">Nom</label>
                                <input value="<?= $data['nom'] ?>" type="text" name="nom" id="nom" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <button name="submit" class="btn btn-warning btn-block">Modifier</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php include '../include/footer.php'; ?>
