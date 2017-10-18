<?php include_once 'config/init.php'; ?>

<?php
	$post = new Post;

	$template = new Template('templates/frontpage.php');

	$template->title = 'Home';

	$template->posts = $post->getAllPosts(); 

	$template->user_posts = $post->getUserPosts($_SESSION['user_id']);

echo $template;