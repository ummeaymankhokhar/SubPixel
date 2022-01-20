<?php
require_once('dbconnection.php');
session_start();

if (isset($_POST['Upload'])) {
    
    $image = $_FILES['image']['name'];
    $name = $_POST['img_name'];
    
    
    $tags = str_replace( ',', ' ', strtolower($_POST['tags']));
    $image_tags = mysqli_real_escape_string($con,$tags);

    
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (img_name,tags,image) VALUES ('$name', '$image_tags','$image')";
   
     mysqli_query($con, $sql);
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo "<script>alert('image uploaded');
        window.location='home.php';
        </script>";
            }
            else{
            
            echo "<script>alert('error');
            window.location='upload.php';
            </script>";
            
            }
    

   
            
}
else{
    echo "Not Working";
}

?>