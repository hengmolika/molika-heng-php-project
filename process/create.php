<?php 
    require_once('../database/database.php');
    if(isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $folder = '../images/';
        move_uploaded_file($tmp_name, $folder.$imageName);
        createItem($_POST, $imageName);
    
    }else{
        echo "Fail";
    }