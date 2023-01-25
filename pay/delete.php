<?php
require '../include/connexion.php';
$id= $_GET['id'];
$req = $db->prepare('delete from pays where id=?');
$req->execute([$id]);
header('location: /pay/index.php?message=deleted');