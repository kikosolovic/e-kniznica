<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0 ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Prihlásiť</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Registrovať</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<body>
    <div class="registerdiv">
     <form action="register.php" method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>First Name</label>
        <input class="input"type="text" name="fname"><br>
        <label>Last Name</label>
        <input class="input"type="text" name="lname"><br>
        <label>Email</label>
        <input class="input"type="text" name="email"><br>
        <label>Password</label>
        <input class="input" type="password" name="password"> 
        <label>Password Again</label>
        <input class="input" type="password" name="passwordagain"> 
        <p>Nemas ucet? <a href="">Registrovat</a></p>
        <div class="nehehe">
            <input class="registerbtn" type="submit" value="Register">
        </div>
        
     </form>
     </div>

<br><br><br><br><br><br>
<footer class="bg-dark text-center text-lg-start fixed-bottom">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <p class="text-white">Year: <span id="datetime"></span></p><script>var dt = new Date(); var y = dt.getFullYear();
document.getElementById("datetime").innerHTML=y;</script>
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
</footer>

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
