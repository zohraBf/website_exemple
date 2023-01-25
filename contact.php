<?php include 'include/sess.php'; ?>
<?php include 'include/header.php'; ?>
<?php include 'include/connexion.php'; ?>
<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $req = $db->prepare("SELECT COUNT(*) FROM users WHERE username=? AND password=?");
    $req->execute([$username,$password]);
    $res = $req->fetchColumn();
    if($res == 1){
        $_SESSION['user']=$username;
        header('location: /index.php');
    }else{
        header('location: /login.php?failed');
    }
}
?>
    <div class="login-bg-overlay au-sign-in-basic"></div>
 <!--start wrapper-->
    <div class="wrapper">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
          <div class="container-fluid">
            <a href="javascript:;"><img src="assets/images/logo-icon-3.png" width="140" alt=""/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3 login-menu-2">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Contact</a>
                </li>
              </ul>
              <form class="d-flex">
                <a href="javascript:;" class="btn btn-sm btn-primary px-4 radius-30">Buy Now</a>
              </form>
            </div>
          </div>
        </nav>
      </header>
      <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">

            </div>
          </div>
        </div>
      </div>
     </div>
     <footer class="my-5">
       <div class="container">
          <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
            <a href="javascript:;"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="javascript:;"><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href="javascript:;"><ion-icon name="logo-github"></ion-icon></a>
            <a href="javascript:;"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="javascript:;"><ion-icon name="logo-pinterest"></ion-icon></a>
          </div>
          <div class="text-center">
            <p class="my-4">Copyright © 2021 UI Admin by Codervent.</p>
          </div>
       </div>
     </footer>
     </div>
  <!--end wrapper-->


  </body>
</html>