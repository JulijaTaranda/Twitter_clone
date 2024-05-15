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

    <title>Blog as Twitter Clone, using PHP & MySQL</title>
</head>
<body>

<!--UPDATE Post-->
   <div class="container mt-5">
        <?php foreach($query as $q) : ?>
           <form method="POST">
              <input type="text" hidden name="id" value="<?= $q['id']; ?>">
              <input type="text" name="title" value="<?= $q['title']; ?>" class="form-control my-3 bg-dark text-white text-center">
              <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?= $q['content']; ?></textarea>
              <button class="btn btn-dark" name="update">Update</button>
              <a href="view.php?id=<?= $q['id'] ?>" class="btn btn-dark">Back</a>
           </form>
        <?php endforeach; ?>
   </div>

</body>
</html>