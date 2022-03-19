<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

require_once 'dbconnect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bigLibrary WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $picture = $data['image'];
        $isbnCode = $data['isbnCode'];
        $shortDescription = $data['shortDescription'];
        $type = $data['type'];
        $authorFirstName = $data['authorFirstName'];
        $authorLastName = $data['authorLastName'];
        $publisherName = $data['publisherName'];
        $publisherAddress = $data['publisherAddress'];
        $publishDate = $data['publishDate'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<div class="container">
        <h2 class="mb-3 mt-5">Update request: <?php echo $title ?> </h2>
        <form action="action/a_update.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Title" value="<?=$title?>">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" name="picture" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Image">
            <label for="exampleFormControlInput1" class="form-label">ISBN Code</label>
                <input type="number" name="isbnCode" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="ISBN Code" value="<?=$isbnCode?>">            
            <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                <input type="text" name="shortDescription" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Short Description" value="<?=$shortDescription?>">            
            <label for="exampleFormControlInput1" class="form-label">Type of media</label>
                <input type="text" name="type" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Type of media" value="<?=$type?>">            
            <label for="exampleFormControlInput1" class="form-label">First name of the author</label>
                <input type="text" name="authorFirstName" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="First name of the author" value="<?=$authorFirstName?>">            
            <label for="exampleFormControlInput1" class="form-label">Last name of the author</label>
                <input type="text" name="authorLastName" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Last name of the author" value="<?=$authorLastName?>">            
            <label for="exampleFormControlInput1" class="form-label">Name of the publisher</label>
                <input type="text" name="publisherName" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Name of the publisher" value="<?=$publisherName?>">            
            <label for="exampleFormControlInput1" class="form-label">Address of the publisher</label>
                <input type="text" name="publisherAddress" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Address of the publisher" value="<?=$publisherAddress?>">            
            <label for="exampleFormControlInput1" class="form-label">Publishing date</label>
                <input type="date" name="publishingDate" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Publishing date" value="<?=$publishDate?>">
            <label for="exampleFormControlInput1" class="form-label">Stock</label>
                <input type="int" name="status" class="form-control mb-3 w-50" id="exampleFormControlInput1" placeholder="Stock" value="<?=$status?>">

                <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                <input type= "hidden" name= "picture" value= "<?php echo $data['image'] ?>" />

                <button class='btn btn-success' type="submit">Save Changes</button>
                <a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a>
        </div>
    </form>
    </div>
    
</body>
</html>