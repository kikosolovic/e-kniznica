<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<form method="post">
  <input class="form-control me-2" type="text" name="author_or_book" aria-label="Search">
  <input type="submit"></input>
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

      $get_search_result = $_POST["author_or_book"];
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