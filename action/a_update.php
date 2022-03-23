<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

require_once '../dbconnect.php';
require_once 'file_upload.php';

if ($_POST) {    
    $title = $_POST["title"];
    $picture = file_upload($_FILES["picture"]);
    $isbnCode = $_POST["isbnCode"];
    $shortDescription = $_POST["shortDescription"];
    $type = $_POST["type"];
    $authorFirstName = $_POST["authorFirstName"];
    $authorLastName = $_POST["authorLastName"];
    $publisherName = $_POST["publisherName"];
    $publisherAddress = $_POST["publisherAddress"];
    $publishingDate = $_POST["publishingDate"];
    $status = $_POST["status"];
    $id = $_POST["id"];
    $uploadError = '';

    $picture = file_upload($_FILES['picture']);
    if($picture->error===0){
        ($_POST["picture"]=="picture.jpeg")?: unlink("../picture/$_POST[picture]");           
        $sql = "UPDATE bigLibrary SET title = '$title', image = '$picture->fileName', isbnCode = $isbnCotde, type = '$ype', authorFirstName = '$authorFirstName', authorLastName = '$authorLastName', publisherName = '$publisherName', publisherAddress = '$publisherAddress', publishDate = '$publishingDate', status = '$status', shortDescription = '$shortDescription'  WHERE id = {$id}";
    }else{
        $sql = "UPDATE bigLibrary SET title = '$title', isbnCode = $isbnCode, type = '$type', authorFirstName = '$authorFirstName', authorLastName = '$authorLastName', publisherName = '$publisherName', publisherAddress = '$publisherAddress', publishDate = '$publishingDate', status = '$status', shortDescription = '$shortDescription' WHERE id = {$id}";}    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
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
        <title>Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>