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
    
    <title>Blog as Twitter Clone, using PHP and MySQL</title>
</head>
<body>

<!--Display Single Post from Database-->
    <div class="container mt-5">

       <?php foreach($query as $q) :?>
           <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?= $q['title'] ?></h1>

                <div class="d-flex mt-2 justify-content">
                   <a href="edit.php?id=<?= $q['id'] ?>" class="btn btn-light btn-sm" name="edit">Edit</a> 
                   <form method="POST">
                        <input type="text" hidden value='<?= $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>

           </div>
           <p class="mt-5 border border-dark pl-3"><?= $q['content']; ?></p>
       <?php endforeach; ?>

       <a href="index.php" class="btn btn-dark">Back</a>
    </div>
    
</body>
</html>