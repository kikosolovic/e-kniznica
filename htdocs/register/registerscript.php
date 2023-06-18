<?php
$logged = '';

function register() {
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
    $get_email = $_POST["email"] ?? null;
    $get_password = $_POST["password"] ?? null;
    $get_passwordagain = $_POST["passwordagain"] ?? null;

    if (isset($get_fname) && isset($get_lname) && isset($get_email) && isset($get_password) && isset($get_passwordagain)) {
        if ($get_fname !== "" && $get_lname !== "" && $get_email !== "" && $get_password !== "" && $get_passwordagain !== "") {
            $highest_id = 0;

            $sql_get_id = "SELECT MAX(id)+1 AS highest_id FROM users";
            $result_get_id = $conn->query($sql_get_id);
            if ($result_get_id->num_rows > 0) {
                $row = $result_get_id->fetch_assoc();
                $highest_id = $row["highest_id"];
            } else {
                echo "<p style='color: #d0a100; font-size: 2em'>Technický problém. Skúste sa registrovať neskôr.<p>";
            }

            $sql1 = "INSERT INTO users VALUES ($highest_id, '$get_fname', '$get_lname', $highest_id, 0)";
            $sql2 = "INSERT INTO credentials VALUES ($highest_id, '$get_email', '$get_passwordagain')";
            $conn->query($sql1);
            $conn->query($sql2);
            echo "<p style='color: dodgerblue; font-size: 2em'>Registrácia úspešná.<p>";
        } else {
            echo "<p style='color: #a300ff; font-size: 2em'>Všetky polia musia byť vyplnené.<p>";
        }
    } else {
        echo "<p style='color: #a300ff; font-size: 2em'>Všetky polia musia byť vyplnené.<p>";
    }
}
?>
