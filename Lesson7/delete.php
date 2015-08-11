<?php
require_once 'twig.php';
require_once 'Blog.php';

$blog = new Blog();
$blog->removeArticle($_GET['id']);
$data = $blog->getArticles();

print($twig->render('delete.tpl',
    array('articles'=>$data)));
