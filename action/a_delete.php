<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

require_once '../dbconnect.php';

if($_POST) {
    $id = $_POST['id'];
    $picture = $_POST['picture'];
    ($picture =="picture.jpeg")?: unlink("../picture/$picture");

    $sql = "DELETE FROM bigLibrary WHERE id = {$id}";
    if(mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "You have successfuly delete the media!";
    } else {
        $class = "danger";
        $message = "Upps! Something went wrong: ". $connect->error;
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <div>
            <h1 class="mt-5 mb-3">Delete request response</h1>
        </div>
        <div class="alert alert-<?=$class?>" role="alert">
                <p><?=$message?></p>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
        </div>
    </div>
    
    
</body>
</html>