<?php

class Post {

    private $file = 'data.json';
    private $title;
    private $content;
    private $author;
    private $badWords = ['test'];  

    function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    function getTitle() {
        foreach($this->badWords as $badWord) {
            $title = strtolower($this->title);
            if(str_contains($title, $badWord)) {
                return $this->title = '*****'; 
            } else {
                return $this->title;
            }
        }
    }

    function getContent() {
        foreach($this->badWords as $badWord) {
            $content = strtolower($this->content);
            if(str_contains($content, $badWord)) {
                return $this->content = '*****'; 
            } else {
                return $this->content;
            }
        }
    }

    function getAuthor() {
        foreach($this->badWords as $badWord) {
            $author = strtolower($this->author);
            if(str_contains($author, $badWord)) {
                return $this->author = '*****'; 
            } else {
                return $this->author;
            }
        }
    }
}