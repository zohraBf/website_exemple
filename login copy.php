<?php
$title = "Login";
$bo= '';
$st= '/css/login.css';
?>


<div class="login-box">
  <h2>Login</h2>
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
        <button name="login">Se connecter</button>
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