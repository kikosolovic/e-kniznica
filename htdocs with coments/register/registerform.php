<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: #B7E0D9;">
  <div class="container-fluid">
    <a class="navbar-brand navlinkfg" href="javascript:history.back()">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    </div>
  </div>
</nav><br><br><br><br>

<body>
    <div class="registerdiv">
     <form method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label id="fname">First Name</label>
        <input class="input" type="text" name="fname" placeholder="Type your first name here."><br>
        <label id="lname">Last Name</label>
        <input class="input" type="text" name="lname" placeholder="Type your last name here."><br>
        <label id="email">Email</label>
        <input class="input" type="text" name="email" placeholder="Type your email here."><br>
        <label id="password">Password</label>
        <input class="input" type="password" name="password" placeholder="Type your password here.">
        <label id="passwordagain">Repeat Password</label>
        <input class="input" type="password" name="passwordagain" placeholder="Type your password again here.">
        <p>Máte účet? <a href="./../login/loginform.php">Prihláste sa</a></p>
        <div class="nehehe">
            <input class="registerbtn" type="submit" value="Register">
        </div>
     </form>
     </div>
</body>
</html>

<?php
include 'registerscript.php';
   register()
?>
