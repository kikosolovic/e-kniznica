<?php
$logged = '';

function register() {
    /*
    uses form to register with fields
        fname, lname, email, password, passwordagain

    Returns
        - if registration is not possible
            <p style='color: #d0a100; font-size: 2em'>Technický problém. Skúste sa registrovať neskôr.<p>

        - if everything is valid
            <p style='color: dodgerblue; font-size: 2em'>Registrácia úspešná.<p>

        - email is already registered
            <p style='color: #a300ff; font-size: 2em'>Email $get_email je už registrovaný.<p>

        - password doesn't meet requirements
            <p style='color: #a300ff; font-size: 2em'>Heslo musí mať aspoň 8 znakov a obsahovať aspoň jedno číslo, veľké a malé písmeno.<p>

        - some fields are empty
            <p style='color: #a300ff; font-size: 2em'>Všetky polia musia byť vyplnené.<p>
            
    */
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

    if (
        isset($get_fname) && isset($get_lname) && isset($get_email) &&
        isset($get_password) && isset($get_passwordagain)
    ) {
        if (
            $get_fname !== "" && $get_lname !== "" && $get_email !== "" &&
            $get_password !== "" && $get_passwordagain !== ""
        ) {
            if (strlen($get_password) >= 8 && preg_match('/[0-9]/', $get_password) && preg_match('/[a-z]/', $get_password) && preg_match('/[A-Z]/', $get_password)) {
                $highest_id = 1;

                $sql_get_id = "SELECT MAX(id)+1 AS highest_id FROM users";
                $stmt_get_id = $conn->prepare($sql_get_id);
                $stmt_get_id->execute();
                $result_get_id = $stmt_get_id->get_result();

                if ($result_get_id->num_rows > 0) {
                    $row = $result_get_id->fetch_assoc();
                    $highest_id = $row["highest_id"] ?? 1;
                } else {
                    echo "<p style='color: #d0a100; font-size: 2em'>Technický problém. Skúste sa registrovať neskôr.<p>";
                }

                try {
                    $sql1 = "INSERT INTO users (id, firstname, lastname, credential_id, admin) VALUES (?, ?, ?, ?, 0)";
                    $stmt1 = $conn->prepare($sql1);
                    $stmt1->bind_param("isss", $highest_id, $get_fname, $get_lname, $highest_id);
                    $stmt1->execute();

                    $sql2 = "INSERT INTO credentials (id, email_address, password) VALUES (?, ?, ?)";
                    $stmt2 = $conn->prepare($sql2);
                    $stmt2->bind_param("iss", $highest_id, $get_email, $get_passwordagain);
                    $stmt2->execute();

                    echo "<p style='color: dodgerblue; font-size: 2em'>Registrácia úspešná.<p>";
                } catch (mysqli_sql_exception $error) {
                    echo "<p style='color: #a300ff; font-size: 2em'>Email $get_email je už registrovaný.<p>";
                }
            } else {
                echo "<p style='color: #a300ff; font-size: 2em'>Heslo musí mať aspoň 8 znakov a obsahovať aspoň jedno číslo, veľké a malé písmeno.<p>";
            }
        } else {
            echo "<p style='color: #a300ff; font-size: 2em'>Všetky polia musia byť vyplnené.<p>";
        }
    } else {
        echo "<p style='color: #a300ff; font-size: 2em'>Všetky polia musia byť vyplnené.<p>";
    }
}
?>
