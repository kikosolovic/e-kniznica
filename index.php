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
        $sql = "SELECT books.title, books.author_id, authors.fullname, books.description, books.image FROM books INNER JOIN authors ON books.author_id = authors.id WHERE title REGEXP '$get_search_result' OR fullname REGEXP '$get_search_result'";
        $result = $conn->query($sql);

        echo "<table border='1'><tr><th>Bookname</th><th>Author</th><th>Description</th><th>Image</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td><img style='display:block;' src=" . $row['image'] . " height=100px ></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>