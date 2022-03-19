<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

require_once "../dbconnect.php";
require_once "file_upload.php";

if($_POST) {
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
    $uploadError = '';

    $sql = ("INSERT INTO bigLibrary (title, image, isbnCode, shortDescription, type, authorFirstName, authorLastName, publisherName, publisherAddress, publishDate, status) VALUE ('$title', '$picture->fileName', $isbnCode, '$shortDescription', '$type', '$authorFirstName', '$authorLastName', '$publisherName', '$publisherAddress', '$publishingDate', $status)");

    if(mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
        <table class='table w-50'><tr>
        <td> $title </td>
        <td> $isbnCode </td>
        <td> $shortDescription </td>
        <td> $type </td>
        <td> $authorFirstName </td>
        <td> $authorLastName </td>
        <td> $publisherName </td>
        <td> $publisherAddress </td>
        <td> $publishingDate </td>
        <td> $status </td>
        </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>