<?php 
    function db() {
        return new mysqli('localhost','root','','project');
    }

    function getAllpost() {
        return db()->query("SELECT * FROM post ORDER BY post_id DESC");
    }

    function getItemById($id) {
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }

    function getOnePost($id) {
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }

    function deleteItem($id) {
        db()->query("DELETE FROM post WHERE post_id = $id");
        header("Location: http://localhost/molika-heng-php-project/?page=about");
    }

    function updateItem($value) {
        $des = $value['des'];
        $price = $value['price'];
        $location = $value['location'];
        $id = $value['itemId'];
        db()->query("UPDATE post SET price = '$price', description = '$des', location = '$location' WHERE post_id = $id");
        header("Location: http://localhost/molika-heng-php-project/?page=about");
    }
    
    function createItem($value,$image) {
        $price = $value['price'];
        $des = $value['des'];
        $location = $value['location'];
        $user = $value['user'];
        db()->query("INSERT INTO post(image,description,price,location,user_id) VALUES ('$image','$des','$price','$location','$user')");
        header("Location: http://localhost/molika-heng-php-project/?page=about");
    }

    function searchbyLocatiion($location) {
        $name = $location['search'];
        return db()->query("SELECT * FROM post WHERE location LIKE '$name%'");
    }

    function readMore($text,$number) {
        return substr($text,0,$number);
    }