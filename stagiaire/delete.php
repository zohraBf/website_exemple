<?php
require '../include/connexion.php';
$id= $_GET['id'];
$req = $db->prepare('delete from stagiaires where id=?');
$req->execute([$id]);
header('location: /stagiaire/index.php?message=deleted');