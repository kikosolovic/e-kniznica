<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Uživatel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Wishlist</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-md-0 ml-auto">
        <?php
          // include 'login/login.php';
          if (true){
            echo '
            <li class="nav-item">
            <a class="nav-link" href="login/login.php">Prihlásiť</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="register/register.php">Registrovať</a>
          </li>';
          }
          else{
            echo '
            <li class="nav-item">
            <a class="nav-link" href="login/login.php">[Meno] [Priezvisko]</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Odhlasit</a>
          </li>
            ';
          }
          ?>
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<form method="post">
<div class="row d-flex justify-content-center container">
  <div>
    <input class="form-control" type="text" name="author_or_book" aria-label="Search">
  </div>
  <div>
    <input class="btn btn-outline-secondary" type="submit" value="Hľadať"></input>
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
          echo "<td>" . $row['title'] . "</td>";
          echo "<td>" . $row['fullname'] . "</td>";
          echo "<td>" . $row['description'] . "</td>";
          echo "<td><img style='display:block;' src=" . $row['image'] . " height=100px ></td>";
          echo "</tr>";
      }
      echo "</table>";
  ?>

<footer class="bg-dark text-center text-lg-start fixed-bottom">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <p class="text-white">Year: <span id="datetime"></span></p><script>var dt = new Date(); var y = dt.getFullYear();
document.getElementById("datetime").innerHTML=y;</script>
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
</footer>
</body>
</html>
