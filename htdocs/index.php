<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link href="styles/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php include "./navbar.php" ?>
<br><br><br><br>

<form method="post">
<div class="justify-content-center container">
  <div class="row">
    <div class="col-11">
      <input class="form-control" type="text" name="author_or_book" aria-label="Search">
    </div>
    <div>
      <input class="btn btn-outline-secondary" type="submit" value="Hľadať"></input>
    </div>
  </div>
</div>
</form>


<br>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "library";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {;
          die("Connection failed: " . $conn->connect_error);
        }

        $get_search_result = $_POST["author_or_book"] ?? null;
        $sql = "SELECT books.id, books.title, books.author_id, authors.fullname, books.description, books.image, release_year FROM books INNER JOIN authors ON books.author_id = authors.id WHERE title REGEXP '$get_search_result' OR fullname REGEXP '$get_search_result'";
        $result = $conn->query($sql);
        $bookdata = array();

        while ($row = $result->fetch_assoc()) {
          $bookdata[] = $row;
        }
        
        echo '<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">';
        echo '<div class="carousel-inner">';
        echo '<div class="carousel-item active">';
        echo '<div class="card-wrapper container-sm d-flex  justify-content-around">';

        foreach ($result as $book) {
          echo '<div class="card pics_in_a_row" style="width: 11rem;border: none ; "><a href="bookDetails/detail.php/'. $book['id'] . '"><img src="'. $book['image'] . '" class="card-img-top img" alt="imagetop"></a><div class="card-body"><h5 class="card-title">'. $book['title'] .'</h5><p> - '. $book['fullname'] . ' <br> - '. $book['release_year'] . '</div></div>';
          if ($book['id'] % 5 == 0) {
            echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">';
            echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
            echo '<span class="visually-hidden">Previous</span>';
            echo '</button>';
            echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">';
            echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            echo '<span class="visually-hidden">Next</span>';
            echo '</button>';
            echo '</div></div>';
            if ($book['id'] != 10) {
              echo '<div class="carousel-item active">';
              echo '<div class="card-wrapper container-sm d-flex  justify-content-around">';
            }
          }
        }
        echo '</div></div>';
    ?>

<footer class="text-center fixed-bottom text-lg-start" style="background-color: #B7E0D9;">
  <div class="text-center p-3" style="background-color: #B7E0D9;">
  <p class="navlinkfg">Year: <span id="datetime"></span></p><script>var dt = new Date(); var y = dt.getFullYear();
document.getElementById("datetime").innerHTML=y;</script>
    <a class="navlinkfg" href="#">Knižnica</a>
  </div>
</footer>
</body>
</html>