<nav class="navbar navbar-expand-md fixed-top" style="background-color: #B7E0D9;">
  <div class="container-fluid">
    <a class="navbar-brand navlinkfg" href="index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link navlinkfg" href="#">Uživatel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navlinkfg" href="wishlist/wishlist.php">Wishlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navlinkfg" href="wishlist/wishlist.php">Wishlist</a>
        </li>
      <ul class="navbar-nav me-auto mb-2 mb-md-0 ml-auto">
        <?php
        // uses login script to login
        include "login/loginscript.php";
        if (!isset($_SESSION)) {
          session_start();
        } // if user is not registered
          if (!isset($_SESSION["firstname"])){
            echo('
            <li class="nav-item">
            <a class="nav-link navlinkfg" href="login/loginform.php">Prihlásiť</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navlinkfg" href="register/registerform.php">Registrovať</a>
            </li>');
          } // if user is alread registered
          else{
          echo('
            <li class="nav-item">
            <a class="nav-link navlinkfg" href="login/loginform.php">'. $_SESSION["firstname"] .' '. $_SESSION["lastname"] . '</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login/loginscript.php?function=logout">Odhlasit</a>
            </li>
            ');
          }
          ?>
      </ul>
    </div>
  </div>
</nav>