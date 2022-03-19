<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

require_once "dbconnect.php";

$sql = "SELECT * FROM bigLibrary";

$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) == 0){
    $rows = "No result";
} else {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Big Library</title>
</head>
<body>
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

    <!-- heroimage begin  -->
    <img src="picture/heroimage.jpg" class="img-fluid" alt="...">
    <!-- heroimage end  -->
    <!-- main begin -->
    <div class="container">
        <div class="text-center mt-5 mb-5">
            <a href="create.php" class="btn btn-primary fs-4 mb-4">Create a media</a>
            <h1>All media: </h1>
        </div>
        <div class="row row-cols-4">
            <?php 
                if(is_array($rows)){

                
                foreach($rows as $row){ 
            ?>
            <div class="col">
                <div class="card mb-5 text-center" style="width: 18rem;">
                    <img src="<?= $row["image"] ?>" class="card-img-top" alt="..." height="400px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row["title"] ?></h5>
                        <p class="card-text"><?= $row["shortDescription"]?></p>
                        <a href="details.php?id=<?= $row["id"] ?>" class="btn btn-primary">Show Media</a>
                        <div class="mt-2">
                        <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-warning">Update</a>
                        <a href="delete.php?id=<?= $row["id"] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            }
                ?>
        </div>
    </div>
    <!-- main end -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>