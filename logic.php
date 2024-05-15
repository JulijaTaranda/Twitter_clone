<?php

    //CONNECTION to Database
     $conn = mysqli_connect("localhost","root","password","blog");
    
     if(!$conn) {
        echo "<h3 class='container bg-dark text-center p-3
              text-warning rounded-lg mt-5'>Not able establish Database Connection</h3>";
     }

     //SHOW All Posts
     $sql = "SELECT * FROM data";
     $query = mysqli_query($conn, $sql);

     //CREATE Posts
     if(isset($_REQUEST["new_post"])) {
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO data(title, content) VALUES ('$title', '$content')";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
     }

     //SHOW single Post
     if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
     }

     //UPDATE Post
     if(isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=updated");
        exit();
     }

     //DELETE Post
     if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=deleted");
        exit();
     }

?>