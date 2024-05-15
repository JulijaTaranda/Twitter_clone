<?php
    include("logic.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Blog as Twitter clone, using PHP and MySQL</title>
</head>
<body>

    <div class="container mt-5">

    <!--Display successfull action info-->
        <?php if(isset($_REQUEST['info'])) {?>
            <?php if($_REQUEST['info'] == "added") {?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully!
                </div>
                <?php }elseif($_REQUEST['info'] == "updated") {?>
                    <div class="alert alert-success" role="alert">
                      Post has been updated successfully!
                    </div>
                <?php }elseif($_REQUEST['info'] == "deleted") {?>
                    <div class="alert alert-danger" role="alert">
                      Post has been deleted successfully!
                    </div>
            <?php } ?>
        <?php } ?>

    <!--Create a new Post botton-->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

    <!--Show all posts from database-->
        <div>
            <?php foreach($query as $q) :?>
                <div>
                    <div class="card text-white bg-dark mt-3 mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $q['title']; ?></h5>
                            <p class="card-text"><?= $q['content']; ?></p>
                            <a href="view.php?id=<?= $q['id']; ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>