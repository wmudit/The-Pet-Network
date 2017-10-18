<?php include_once 'config/init.php';

	$post = new Post;

	$template = new Template('templates/single-post.php');

	$template->title = "SuckSuck";

	$post_id = isset($_GET['id']) ? $_GET['id'] : null;

	$template->post = $post->getPost($post_id);

	$template->comments = $post->getComments($post_id);

	echo $template;