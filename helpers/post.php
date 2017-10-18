<?php

	$db_name = "thepetnetwork";
	$username = "root";
	$password = "";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);	

	$location = "../index.php";

	$target_directory = "../images/post_images/";
	$target_file = $target_directory.basename($_FILES["image"]["name"]);
	$db_img_link = "images/post_images/".basename($_FILES["image"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	$user_id = $_POST['user_id'];
	$title = $_POST['title'];
	$description = $_POST['description'];

	$query = "INSERT INTO posts(title, description, img, user_id) VALUES ('$title', '$description', '$db_img_link', $user_id)";

	if(mysqli_query($connection, $query)){
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		header ('Location: '.$location);
	}
	
	mysqli_close($connection);