<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);

function file_upload($picture) { // $_FILES["picture"] - collects the values of "picture"
    // this object will carry status from file upload
    $result = new stdClass(); 
    $result->fileName = 'picture.jpeg';
    $result->error = 1;//it could also be a boolean true/false

    // collecting the data from the var picture -> name, size, 
    $fileName = $picture["name"];
    $fileTmpName = $picture["tmp_name"];
    $fileError = $picture["error"];
    $fileSize = $picture ["size"];
    // comparing the type of pictures if its allowed. strtolower is only accepting lowercase. pathinfo saves the filename and filetype
    $fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
    // Which files are actually allowed
    $filesAllowed = ["png", "jpg", "jpeg"];
    if ($fileError == 4) {
        // sets an errormessage, if no pic was choosen
        $result->ErrorMessage = "No picture was choosen but you can upldate it later";
        return $result;
    } else {
        if (in_array($fileExtension, $filesAllowed)) {
            if ($fileError === 0) {
                // sets the max file size
                if ($fileSize < 500000) {
                    // makes a new random unique name for the filename
                    $fileNewName = uniqid('') . "." . $fileExtension;
                    // chooses where the file is gonna be uploaded
                    $destination = "../picture/$fileNewName";
                    // If the upload of the file (tmpname and destination) didnt show any error, return the result
                    if (move_uploaded_file($fileTmpName, $destination)) {
                        $result->error = 0;
                        $result->fileName = $fileNewName;
                        return $result;
                    } else {    
                        $result->ErrorMessage = "There was an error uploading this file.";
                        return $result;
                    }
                } else {                                      
                    $result->ErrorMessage = "This picture is bigger than the allowed 500Kb. <br> Please choose a smaller one and update the product.";
                    return $result;
                }
            } else {                              
                $result->ErrorMessage = "There was an error uploading - $fileError code. Check the PHP documentation.";
                return $result;
            }
        } else {                      
            $result->ErrorMessage = "This file type can't be uploaded.";
            return $result;
        }
    }
}