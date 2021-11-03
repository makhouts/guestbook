<?php

class Post {

    private $file = 'data.json';
    private $title;
    private $content;
    private $author;

    function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $title;
        $this->author = $title;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getAuthor() {
        return $this->author;
    }
}