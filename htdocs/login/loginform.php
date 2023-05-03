<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: #B7E0D9;">
  <div class="container-fluid">
    <a class="navbar-brand navlinkfg" href="./../index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    </div>
  </div>
</nav><br><br><br><br>

<div class="logindiv">
     <form method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Uživateľské meno</label>
        <input class="input"type="text" name="uname"><br>
        <label>Heslo</label>
        <input class="input" type="password" name="password"> 
        <p>Nemas ucet? <a href="./../register/registerform.php">Registrovat</a></p>
        <div class="nehehe">
            <input class="loginbtn" type="submit" value="Login">
        </div>
        
     </form>
     </div>
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "library";
        
    $conn = new mysqli($servername, $username, $password, $database);
        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $get_mail = $_POST["uname"] ?? null;
    $get_password = $_POST["password"] ?? null; 

    if (isset($get_mail) && isset($get_password)) {
        if ($get_mail !== "" && $get_password !== "") {
            $sql = "SELECT * from credentials WHERE email_address = '$get_mail' AND password = '$get_password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<p>Login successful!</p>";
                }
              } else {
                echo "<p>Login failed!</p>";
              }
        } else {
            echo "<p>Všetky polia musia byť vyplnené.</p>";
        };
    };
?>
</body>
</html>