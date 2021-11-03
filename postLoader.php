<?php

class PostLoader {
    private $file = 'data.json';

    function __construct() {
        if(file_exists($this->file)) {
            $current = file_get_contents($this->file);
            $x = json_decode($current);
            $y = array_reverse($x);
            $z = array_slice($y, 0, 20);
            foreach($z as $key=>$info) {
                ?>
                    <?php echo $key +1 . ' ' ?>
                    <label>Title: <span><?php echo $info->title ?></span></label>
                    <label>Content: <span><?php echo $info->content ?></span></label>
                    <label>Author: <span><?php echo $info->author ?></span></label>
                    <label>Date: <span><?php echo $info->date ?></span></label>
                    <br>
                <?php
            }

        } else {
            echo 'No file.';
        };
    }
};