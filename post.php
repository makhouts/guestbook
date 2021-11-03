<?php

class Post {

    private $file = 'data.json';

    function __construct($title, $content, $author) {
        if(file_exists($this->file)) {
            $this->addPost($title, $content, $author);
        } else {
            $createFile = fopen($this->file, 'w');
            header('Refresh:0');
        }
    }

    function addPost($title, $content, $author) {
        $title = htmlspecialchars($title);
        $content = htmlspecialchars($content);
        $author = htmlspecialchars($author);
        $data = json_decode(file_get_contents($this->file));
        $data[] = array( 
            'title' => $title,
            'content' => $content,
            'author' => $author,
            'date' => date('d-m-y')
        ); 
        $json = json_encode($data);
        file_put_contents($this->file, $json);
    }
}