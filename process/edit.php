<?php include_once('../partial/header.php'); ?>
<div class="container p-4">
    <?php
        require_once('../database/database.php');
        $id = $_GET['id'];
        $item = getItemById($id);
        foreach($item as $row):
    ?>
    <form action="update.php" method="post">
        <input type="hidden" value="<?= $row['post_id'] ?>" name="itemId">
        <div class="form-group">
            <textarea type="text" class="form-control" placeholder="descriptoin" name="des" value="<?= $row['description'] ?>"></textarea>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="price" name="price" value="<?= $row['price'] ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="location" name="location" value="<?= $row['location'] ?>">
        </div>
        <div class="form-group">
            <input type="numer" class="form-control" placeholder="user" name="user" value="<?= $row['user_id'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>
    </form>
    <?php endforeach; ?>
</div>
<?php include_once('../partial/footer.php'); ?>