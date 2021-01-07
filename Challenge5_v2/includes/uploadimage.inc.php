<?php 

$name= $_FILES['file']['name']; //name + file extention(.jpg, .png...)
$tmp_name= $_FILES['file']['tmp_name']; //file var + tmp_name
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name)) {
    $path= '../imagess/'; //the path given is where the images will be uploaded into that location
    if (empty($name))
        { echo "Please choose a file"; } //if no image is uploaded it will display this
    else if (!empty($name)){
         if (($fileextension !== "jpg") && //checks if the file extention is matches the given ones
            ($fileextension !== "jpeg") && 
            ($fileextension !== "png") && 
            ($fileextension !== "bmp"))
        { echo "The file extension must be .jpg, .jpeg, .png, or .bmp in order to be uploaded"; }//prints out the file isnt the right type
    else if (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp"))
       { if (move_uploaded_file($tmp_name, $path.$name)) {echo 'Uploaded!'; }}}} //it uploads the image and gives a message confirming it did
?>
