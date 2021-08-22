<?php 
    include_once('../partial/header.php');
?>
<div class="container p-4">
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" class="form-control" name="file" id="file">
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" placeholder="description" name="des"></textarea>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="price" name="price">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="location" name="location">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="user" name="user">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="upload">Save</button>
        </div>
    </form>
</div> 

<?php include_once('../partial/footer.php'); ?>