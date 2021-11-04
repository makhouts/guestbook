<?php

class PostLoader {
    private $file = 'data.json';

    function __construct() {
        
    }

    function showPosts() {
        if(file_exists($this->file)) {
            $current = file_get_contents($this->file);
            $x = json_decode($current);
        if(!empty($x)) {
            $y = array_reverse($x);
            $z = array_slice($y, 0, 20);
            
            foreach($z as $key=>$info) {
                ?>
                    
                    <div class='result'>
                    <?php echo $key +1 . ' ' ?>
                        <label><strong>Title:</strong> <span><?php echo $info->title ?></span></label>
                        <label><strong>Content:</strong> <span><?php echo $info->content ?></span></label>
                        <label><strong>Author:</strong> <span><?php echo $info->author ?></span></label>
                        <label><strong>Date:</strong> <span><?php echo $info->date ?></span></label>
                    </div>
                    <br>
                <?php
            }
        }
        } else {
            echo 'No file.';
            $createFile = fopen($this->file, 'w');
            header('Refresh:0');
        };
    }

    function addPost($post) {
        $title = htmlspecialchars($post->getTitle());
        $content = htmlspecialchars($post->getContent());
        $author = htmlspecialchars($post->getAuthor());
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
};