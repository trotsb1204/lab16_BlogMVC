<?php
require_once 'models/Post.php';

class BlogController {
    public function showAllPosts(): void {
        $searchQuery = $_GET['search'] ?? '';

        $posts = Post::search($searchQuery);
        $parsedown = new Parsedown();

        include 'views/postView.php';
    }
}