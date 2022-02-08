<?php
  if(isset($_POST["create"])){

    if(empty($_POST["text"])){
      echo "<script> Swal.fire('Error','You need to put the text.','error') </script>";

    } else {
        if(strlen($_POST["title"]) > 20){
        echo "<script> Swal.fire('Error','Title cannot be longer than 20 characters.','error') </script>";
        } elseif(strlen($_POST["text"]) > 4000000000){
                echo "<script> Swal.fire('Error','Text cannot be longer than 4000000000 characters.','error') </script>";
          }
  }
}
?>