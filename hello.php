<?php

$articles = [
   'a' => "first post", 
   'b' => "another post", 
   'c' => "read this!"
];

foreach ($articles as $index => $article) {
    echo $index . ' - ' . $article, ", ";
}