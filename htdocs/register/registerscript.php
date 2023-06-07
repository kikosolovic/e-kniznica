
<?php

    $logged = 'nig';

    function register(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "library";
        
    $conn = new mysqli($servername, $username, $password, $database);
        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $get_fname = $_POST["fname"] ?? null;
    $get_lname = $_POST["lname"] ?? null; 
    $get_mail = $_POST["email"] ?? null;
    $get_password = $_POST["password"] ?? null; 
    $get_passwordagain = $_POST["passwordagain"] ?? null; 

    if (isset($get_fname) && isset($get_lname) && isset($get_email) && isset($get_password) && isset($get_passwordagain)) {
        if ($get_fname !== "" && $get_lname !== "" && $get_email !== "" && $get_password !== "" && $get_passwordagain !== "") {
            
            if ($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO users (firstname, lastname) VALUES ($get_fname, $get_lname) AND INSERT INTO credentials (email_address, password) VALUES ($get_email, $get_passwordagain)";
                echo "Added";
                }
        } else {
            echo "<p>Zlé udáje.</p>";
        };
    } else {
        echo "not gut";
    };
}
?>