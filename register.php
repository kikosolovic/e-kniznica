<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Knižnica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="login/loginform.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<form method="post">
  <label for="mail" name="Mail">Mail</label>
  <input class="form-control me-2" type="text" name="mail" value="<?php echo $_POST['mail']??''; ?>">
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

    $get_mail = "";
    $get_password = "";
    $get_password_again = "";

    if (isset($_POST["mail"]) && isset($get_password) && isset($get_password_again)) {
        $get_mail = $_POST["mail"];
        $get_password = $_POST["password"];
        $get_password_again = $_POST["passwordagain"];

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
                    echo "<p>Registrácia úspešná. Prihláste sa <a href='login/loginform.php'>tu</a>.</p>";
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