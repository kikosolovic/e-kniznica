
<?php

    $logged = 'nig';

    function login(){
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
                while($row = $result->fetch_assoc()) {
                    include "../jsonhandler.php";
                    echo "<p>Login successful!</p>";
                    set($name=$row["firstname"], $surname=$row["lastname"], $logged=true);
                }
              } else {
                echo "<p>Login failed!</p>";
                $logged = "fail";
                file_put_contents("data.json", json_encode(["logged" => false]));
              }
        } else {
            echo "<p>Všetky polia musia byť vyplnené.</p>";
        };
    };
}
?>