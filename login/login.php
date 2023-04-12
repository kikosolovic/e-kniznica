<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="logindiv">
     <form method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input class="input"type="text" name="uname"><br>
        <label>Password</label>
        <input class="input" type="password" name="password"> 
        <p>Nemas ucet? <a href="./../register/register.php">Registrovat</a></p>
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

    $get_mail = $_POST["uname"];
    $get_password = $_POST["password"];

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