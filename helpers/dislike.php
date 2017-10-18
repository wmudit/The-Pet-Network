<?php

	$db_name = "thepetnetwork";
	$username = "root";
	$password = "";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);

	$id = $_GET['post_id'];
	$user_id = $_GET['user_id'];

	$query1 = "UPDATE posts SET upvotes = upvotes - 1 WHERE post_id = $id";
	$query2 = "DELETE FROM likes WHERE post_id = $id AND user_id = $user_id";

	$r = mysqli_query($connection, $query2);

	if(mysqli_query($connection, $query1)){
		$q = "SELECT upvotes FROM posts WHERE post_id = $id";
		$result = mysqli_query($connection, $q);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo $row['upvotes']. " Likes";
			}
		}
	}

	mysqli_close($connection);