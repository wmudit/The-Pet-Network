<?php

	$db_name = "thepetnetwork";
	$username = "root";
	$password = "";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);

	$id = $_GET['post_id'];
	$user_id = $_GET['user_id'];

	$query = "SELECT * FROM likes WHERE post_id = $id AND user_id = $user_id";

	$result = mysqli_query($connection, $query);
	if(mysqli_num_rows($result) == 1){
		echo "true";
	}