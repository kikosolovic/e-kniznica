<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #B7E0D9;">
        <div class="container-fluid">
          <a class="navbar-brand navlinkfg" href="index.php">Knižnica</a>
          <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link navlinkfg" href="#">Uživatel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlinkfg" href="#">Wishlist</a>
              </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-md-0 ml-auto">
                <li class="nav-item">
                    <a class="nav-link navlinkfg" href="#">Prihlásiť</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navlinkfg" href="#">Registrovať</a>
                </li>
              <?php
                // include 'login/login.php';
                if (true){
                  echo '
                  <li class="nav-item">
                  <a class="nav-link" href="login/login.php">Prihlásiť</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="register/register.php">Registrovať</a>
                </li>';
                }
                else{
                  echo '
                  <li class="nav-item">
                  <a class="nav-link" href="login/login.php">[Meno] [Priezvisko]</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Odhlasit</a>
                </li>
                  ';
                }
                ?>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>
