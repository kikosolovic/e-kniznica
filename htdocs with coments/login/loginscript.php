
<?php
// makes functions accessable from other files
if (isset($_GET['function'])) {
    $function = $_GET['function'];
    if (function_exists($function)) {
        $function();
    }
}

function login(){
    /*
    gets email and password from querry params

    Returns
        Login successful/failed
        
        if input fields are empty
            <p>Všetky polia musia byť vyplnené.</p>
    */
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
            $sql = "SELECT users.firstname, users.lastname FROM credentials JOIN users ON credentials.id=users.credential_id WHERE email_address = '$get_mail' AND password = '$get_password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<p>Login successful!</p>";
                if(!isset($_SESSION)){session_start();}
                while($row = $result->fetch_assoc()) {
                    echo("firsstname ".$row["firstname"]."; lastname ".$row["lastname"]);
                    echo "<p>Login successful!</p>";
                    $_SESSION['firstname']=$row["firstname"];
                    $_SESSION['lastname']=$row["lastname"];
                }
              } else {
                echo("Email ".$get_mail."; Password ".$get_password);
                echo "<p>Login failed!</p>";
              }
        } else {
            echo "<p>Všetky polia musia byť vyplnené.</p>";
        };
    };
}

function logout(){
    session_start();
    session_unset();
    header("Location: ../index.php");
}
?>