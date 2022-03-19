<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create</title>
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
    <!-- create begin  -->
    <div class="container">
    <form action="action/a_create.php" method="post" enctype="multipart/form-data">
        <h2 class="mb-3 mt-5">Please insert the data of the media:</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Title">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" name="picture" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Image">
            <label for="exampleFormControlInput1" class="form-label">ISBN Code</label>
                <input type="number" name="isbnCode" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="ISBN Code">            
            <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                <input type="text" name="shortDescription" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Short Description">            
            <label for="exampleFormControlInput1" class="form-label">Type of media</label>
                <input type="text" name="type" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Type of media">            
            <label for="exampleFormControlInput1" class="form-label">First name of the author</label>
                <input type="text" name="authorFirstName" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="First name of the author">            
            <label for="exampleFormControlInput1" class="form-label">Last name of the author</label>
                <input type="text" name="authorLastName" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Last name of the author">            
            <label for="exampleFormControlInput1" class="form-label">Name of the publisher</label>
                <input type="text" name="publisherName" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Name of the publisher">            
            <label for="exampleFormControlInput1" class="form-label">Address of the publisher</label>
                <input type="text" name="publisherAddress" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Address of the publisher">            
            <label for="exampleFormControlInput1" class="form-label">Publishing date</label>
                <input type="date" name="publishingDate" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Publishing date">
            <label for="exampleFormControlInput1" class="form-label">Stock</label>
                <input type="int" name="status" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Stock">
                <button class='btn btn-success' type="submit">Insert Product</button>
        </div>
    </form>
    </div>
    <!-- create end  -->
    
    
</body>
</html>