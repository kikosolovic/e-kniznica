<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

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
      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $get_search_result = $_POST["author_or_book"] ?? null;
      $sql = "SELECT books.title, books.author_id, authors.fullname, books.description, books.image FROM books INNER JOIN authors ON books.author_id = authors.id WHERE title REGEXP '$get_search_result' OR fullname REGEXP '$get_search_result'";
      $result = $conn->query($sql);

      echo "<table border='1'><tr><th>Bookname</th><th>Author</th><th>Description</th><th>Image</th></tr>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
          echo "<td>" . $row['title'] . "</td>";
          echo "<td>" . $row['fullname'] . "</td>";
          echo "<td>" . $row['description'] . "</td>";
          echo "<td><img style='display:block;' src=" . $row['image'] . " height=100px ></td>";
          echo "</tr>";
      }
      echo "</table>";
  ?>

<footer class="text-center text-lg-start" style="background-color: #B7E0D9;">
  <div class="text-center p-3" style="background-color: #B7E0D9;">
  <p class="navlinkfg">Year: <span id="datetime"></span></p><script>var dt = new Date(); var y = dt.getFullYear();
document.getElementById("datetime").innerHTML=y;</script>
    <a class="navlinkfg" href="#">Knižnica</a>
  </div>
</footer>
</body>
</html>