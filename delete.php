<?php 
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

require_once "dbconnect.php";

if($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bigLibrary where id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) === 1) {
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
        header("error.php");
    }
    mysqli_close($connect);
} else {
    header ("location: error.php");
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
        <h2 class="mb-3 mt-5">Delete request: <img class="img-thumbnail rounded circle" src='picture/<?php echo $picture ?>' alt="<?php echo $title ?>"></h2>
        <h4>You have selected the data below</h4>
        <p><?= $title ?></p>
    </div>
    <div class="container">
        <h2>Do you really wanna delete this media?</h2>
        <form action ="action/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </div>
</body>
</html>