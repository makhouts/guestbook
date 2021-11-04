<?php
    require 'post.php';
    require 'postLoader.php';
    $postLoader = new PostLoader();

    if(isset($_POST['post'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $authorName = $_POST['authorName'];
        $post = new Post($title, $content, $authorName);
        $postLoader->addPost($post);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        input {
            margin: auto;
            max-width: 280px;
            height: 25px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid black;
        }
        .result {
            display: inline-flex;
            margin: 10px;
            box-shadow: 0px 0px 16px -5px rgba(0,0,0,0.24);
            background-color: lightgray;
            color: black;
            font-family: Verdana;
        }
        label {
            padding: 0px 15px;
        }
    </style>
</head>
<body>
    <form action="" method='POST'>
        <input type="text" name='title' placeholder='Title'>
        <input type="text" name='content' placeholder='Content'>
        <input type="text" name='authorName' placeholder='Name'>
        <input type="submit" name='post' value="Post">
    </form>
    <br>
    <form action="" method='POST'>
        <input type="text" name='showPosts' placeholder='Amount posts to display?'>
        <input type="submit" name='sendPosts' value="Show">
    </form>

    <?php
        $showList = 20;
        if(isset($_POST['sendPosts']) && $_POST['showPosts'] >= 1 && $_POST['showPosts'] <= 20) {
            $showList = $_POST['showPosts'];
        }
        $postLoader->showPosts($showList); 
    ?>
</body>
</html>