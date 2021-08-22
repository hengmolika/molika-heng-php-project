<div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
        <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
        </div>
    <?php
        require_once('database/database.php');
        $id = $_GET['id'];
        $posts = getOnePost($id);
        foreach ($posts as $post):
    ?>
    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <span><?= $post['date'] ?></span>
            </div>
            <div class="d-flex">
                <div class="image">
                    <img class="img-fluid" width="300" src="images/<?= $post['image'] ?>" alt="">
                </div>
                <div class="title ml-5">
                    <p class="display-5">Country: <?= $post['location'] ?></p>
                    <p>Description: <?= $post['description'] ?></p>
                    <strong class="badge badge-danger">Price: <?= $post['price'] ?>$</strong>
                    <p><a href="?page=contact">visit now</a></p>
                </div>
                
            </div>
            <div class="d-flex justify-content-end">
                <a href="process/edit.php?id=<?= $post['post_id'] ?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                <a href="process/remove.php?id=<?= $post['post_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>