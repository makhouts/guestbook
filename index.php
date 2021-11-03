<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<?php
    require 'post.php';

    if(isset($_POST['post'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $authorName = $_POST['authorName'];
        $post = new Post($title, $content, $authorName);
    }

?>
<body>
    <form action="" method='POST'>
        <input type="text" name='title' placeholder='Title'>
        <input type="text" name='content' placeholder='Content'>
        <input type="text" name='authorName' placeholder='Name'>
        <input type="submit" name='post' value="Post">
    </form>
    <?php require 'postLoader.php';
        $postLoader = new PostLoader();
    ?>
</body>
</html>