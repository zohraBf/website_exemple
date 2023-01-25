<?php
$title = "Login";
$bo= '';
$st= '/css/login.css';
?>
<?php include 'include/sess.php'; ?>
<?php include 'include/header.php'; ?>
<?php include 'include/connexion.php'; ?>
<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $req = $db->prepare("insert into users(username,password) values(?,?) ");
    $req->execute([$username,$password]);
    header('location: /login.php');
}
?>
<div class="login-box">
  <h2>Register</h2>
  <form method="post">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div>
        <button name="login">S'inscrire'</button>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>