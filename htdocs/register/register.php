<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0 ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Prihlásiť</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Registrovať</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<form method="post">
  <label for="mail" name="Mail">Mail</label>
  <input class="form-control me-2" type="text" name="mail">
  <label for="password" name="Password">Heslo</label>
  <input class="form-control me-2" type="password" name="password">
  <label for="passwordagain" name="PasswordAgain">Potvrdit heslo</label>
  <input class="form-control me-2" type="password" name="passwordagain">
  <p>Už máte účet? <a href="login/loginform.php">Prihlaste sa</a></p>
  <input type="submit" class="btn btn-primary" value="Registrovať"></input>
</form>
<br>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "library";
    
    $conn = new mysqli($servername, $username, $password, $database);
      
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $get_mail = $_POST["mail"] ?? null;
    $get_password = $_POST["password"] ?? null;
    $get_password_again = $_POST["passwordagain"] ?? null;

    if (isset($get_mail) && isset($get_password) && isset($get_password_again)) {
        if ($get_mail !== "" && $get_password !== "" && $get_password_again !== "") {
            if ($get_password !== $get_password_again) {
                echo "<p>Heslá sa nezhodujú</p>";
                return;
            }
            if (strlen($get_password) < 8) {
                echo "<p>Heslo musí byť dlhé aspoň 8 znakov.</p>";
                return;
            }
        
            $sql = "INSERT INTO credentials(email_address, password) VALUES ('$get_mail', '$get_password')";
            try {
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Registrácia úspešná. Prihláste sa <a href='./../login/login.php'>tu</a>.</p>";
                } else {
                    echo "<p>Zadali ste nesprávne udaje.</p>";
                }  
            } catch (Exception) {
                echo "<p>Tento email je už registrovaný. Prihláste sa <a href='login/loginform.php'>tu</a>.</p>";
            }
        } else {
            echo "<p>Všetky polia musia byť vyplnené.</p>";
        }
    }
?>
</body>
</html>