<?php 
    include_once('partial/header.php'); 
    include_once('partial/navbar.php'); 

    //get each page
    if(isset($_GET['page'])){
        if($_GET['page']== 'about'){
            include_once('pages/about.php');
        }else if($_GET['page']== 'contact'){
            include_once('pages/contact.php');
        }else if($_GET['page']== 'login'){
            include_once('pages/login.php');
        }else if($_GET['page']== 'signup'){
            include_once('pages/signup.php');
        }else if($_GET['page']== 'detail'){
            include_once('pages/detail.php');
        }else if($_GET['page']== 'home'){
            include_once('pages/home.php');
        }
    }else{
        include_once('pages/home.php');
    }

    include_once('partial/footer.php'); 