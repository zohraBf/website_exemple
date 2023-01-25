<?php
$title = "Contact";
$bo= '/css/bootstrap.css';
$st= '/css/style.css';
$jq= '/js/jQuery.js';
$bu= '/js/bootstrap.bundle.js';

?>
<?php include 'include/connexion.php'; ?>
<?php
if(isset($_POST['s'])){
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
    $req = $db->prepare('insert into chats(pseudo,message) values(?,?)');
    $req->execute([$pseudo,$message]);
    header('location: /contact.php');
}

?>
<?php include 'include/sess.php'; ?>
<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form autocomplete="off" action="" method="post">
                        <div class="form-group">
                            <label for="pseudo">pseudo</label>
                            <input require type="text" name="pseudo" id="pseudo">
                        </div>
                        <div class="form-group">
                            <label for="message">message</label>
                            <textarea type="text" name="message" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button name="s">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <!-- Start -->
                    <?php
                        $query = $db->query('select * from chats');
                        while($data = $query->fetch()):
                    ?>
                    <div class="media m-1">
                        <img width="80" src="/upload/1.png" class="mr-3" alt="avatar">
                        <div class="media-body">
                            <h5 class="mt-0"><?= $data['pseudo'] ?></h5>
                            <p><?= $data['message'] ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>