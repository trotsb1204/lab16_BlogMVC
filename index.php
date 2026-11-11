<?php

require_once 'vendor/autoload.php';
require_once 'controllers/BlogController.php';

$controller = new BlogController();
$controller->showAllPosts();