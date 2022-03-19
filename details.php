<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body>
    <?php 
    error_reporting(E_ALL); 
    ini_set('display_errors', TRUE);
    

    require_once "dbconnect.php";
    if(isset($_GET["id"]) && !empty ($_GET["id"])){

        $id = $_GET["id"];
        $sql = "SELECT * FROM bigLibrary WHERE id = $id";

        
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);        
    ?>

 <!-- navbar begin -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="picture/logo" alt="" width="240px" height="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Get a Library Card</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Books</a>
        </li>        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">DVD</a>
        </li>        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">CD</a>
        </li>        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- navbar end -->

<!-- card begin  -->
<div class="d-flex justify-content-center mt-5">
<div class="card text-center d-flex" style="width: 18rem;">
<img src="<?= $row["image"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $row["title"] ?></h5>
    <p class="card-text">Written by <?= $row["authorFirstName"]." ". $row["authorLastName"] ?></p>
    <p class="card-text"><?= $row["shortDescription"] ?></p>
    <p class="card-text">Type: <?= $row["type"] ?></p>
    <p class="card-text">Published by <?= $row["publisherName"]." in ". $row["publisherAddress"]. " on the ". $row["publishDate"] ?></p>
    <p class="card-text">ISBN: <?= $row["isbnCode"] ?></p>
    <p class="card-text">Stock: <?= $row["status"] ?></p>
    <a href="index.php" class="btn btn-primary">Home</a>
  </div>
</div>
</div>
<!-- card end  -->

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php }
else {
    header("Location: index.php");
} ?>