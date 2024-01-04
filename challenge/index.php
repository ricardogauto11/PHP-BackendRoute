<?php

include __DIR__ . "/vendor/autoload.php";

use App\Author;
use App\Category;
use App\Post;

$php_category = new Category();
$php_category->setName("POO");

$vue_category = new Category();
$vue_category->setName("VueJS");

$ricardo_author = new Author();
$ricardo_author->setName("Ricardo", "Gauto");

$php_post = new Post();
$php_post->addTitle("Introduccion a PHP");
$php_post->addContent("En este post veras como iniciar un proyecto con PHP");
$php_post->addCategory($php_category);

$ricardo_author->createPost($php_post);
$list_posts = $ricardo_author->getPosts();

foreach ($list_posts as $post) {
    echo "El usuario $ricardo_author tiene el post <br>";
    echo $post->getPost();
}