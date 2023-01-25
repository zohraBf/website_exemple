<?php
require '../include/connexion.php';
$id= $_GET['id'];
$req = $db->prepare('delete from villes where id=?');
$req->execute([$id]);
header('location: /ville/index.php?message=deleted');