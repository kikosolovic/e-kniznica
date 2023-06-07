<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book detail</title>
    <link rel="stylesheet" href="../detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
</html>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "library";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $book_id = explode("/", $_SERVER['REQUEST_URI'])[3];
        $sql = "SELECT books.title, books.author_id, authors.fullname, books.main_genre, books.description, books.image, release_year FROM books INNER JOIN authors ON books.author_id = authors.id WHERE books.id = '$book_id'";
        $result = $conn->query($sql);
        $bookdata = array();

        while ($row = $result->fetch_assoc()) {
          $bookdata[] = $row;
        }

        echo '<div class="row">        
                <div class="col">
                    <img class="image-border" src="'. $bookdata[0]['image'] . '">
                </div>
                <div class="col text-right">
                    <div class="book-info">
                        <h1>'. $bookdata[0]['title'] . '</h1>
                        <ul>
                            <li>Author: '. $bookdata[0]['fullname'] .'</li>
                            <li>Release year: '. $bookdata[0]['release_year'] .'</li>
                            <li>Genres: '. $bookdata[0]['main_genre'] .'</li>
                            <br><br><br><br><br><br><br><br>
                            <p>'. $bookdata[0]['description'] .'</p>
                        </ul>
                    </div>
                </div>           
            </div>';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>