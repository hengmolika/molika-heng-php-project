<?php
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        updateItem($_POST);
    }