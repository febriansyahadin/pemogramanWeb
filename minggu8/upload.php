<?php
if (isset($_POST['submit'])) {
    $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES['myfile']['name']); 
    $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowExtension = array("txt", "pdf", "doc", "docx");
    $maxsize = 3*1024*1024;
    
    if (in_array($filetype, $allowExtension) && $_FILES["myfile"]["size"] <= $maxsize) {
    
         if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfile)) {
        echo "file berhasil diunggah";
        echo "<br><img src='$targetfile' style='width: 200px; height: auto;'>";
    }else {
        echo "Gagl mengunggah file.";
        }
    }
    else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
        }
    }
   
?>