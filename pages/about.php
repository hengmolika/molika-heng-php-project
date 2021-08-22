<div class="container">
    <form action="" method="POST" style="margin-top: 20px;">
        <div class="input-group mb-6">
            <input type="text" class="form-control" placeholder="Search location" name="search">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <div class="d-flex justify-content-end p-3">
        <a href="process/add_item.php" class="btn btn-primary">Add Item+</a>
    </div>
    <div class="d-flex flex-wrap">
        <?php
            require_once('database/database.php');
            $posts = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $posts = searchbyLocatiion($_POST);
            }else{
                $posts = getAllpost();
            }
            foreach($posts as $post):
                $description = readMore($post['description'],50);
        ?>
        <div class="card m-4" style="width:300px">
            <img class="card-img-top" src="images/<?= $post['image'] ?>" alt="" style="width:100%">
            <div class="card-body">
            <h4 class="card-title"><?= $post['location'] ?></h4>
            <p><?= $description ?>...<a href="?page=detail&id=<?= $post['post_id'] ?>">readMore</a></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
</div>
