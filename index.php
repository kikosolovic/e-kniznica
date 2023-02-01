<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
</head>
<body>
    <form method="post">
    Search: <input type="text" name="authororbook" value="<?php echo isset($_POST['authororbook']) ? $_POST['authororbook'] : '' ?>"><br>
    <input type="submit">
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "library";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $get_search_result = $_POST["authororbook"];
        $sql = "SELECT id, bookname, author, description, price, image FROM books WHERE bookname REGEXP '$get_search_result' OR author REGEXP '$get_search_result'";
        $result = $conn->query($sql);
        echo "<table border='1'><tr><th>Bookname</th><th>Author</th><th>Description</th><th>Price</th><th>Image</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['bookname'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td><img style='display:block;' src=" . $row['image'] . " height=100px ></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>