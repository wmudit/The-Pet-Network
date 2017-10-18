<?php

	$db_name = "thepetnetwork";
	$username = "root";
	$password = "";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);
	
	$from_user = $_GET['from_user'];
	$from_username = $_GET['from_username'];
	$to_user = $_GET['to_user'];
	$post_id = $_GET['post_id'];
	$type = $_GET['type'];

	$query1 = "INSERT INTO notifications(from_user_id, from_username, to_user_id, post_id, type) VALUES ($from_user, '$from_username', $to_user, $post_id, $type)";

	if(mysqli_query($connection, $query1)){
		if($type == 1) {
			$notification_string = createLikeString($connection, $to_user, $post_id);
			$query4 = "DELETE FROM notification_string WHERE to_user = $to_user AND post_id = $post_id AND type = $type";
			$query5 = "INSERT INTO notification_string(type, to_user, post_id, notif_string) VALUES ($type, $to_user, $post_id, '$notification_string')";
			if(mysqli_query($connection, $query4)){
				$r = mysqli_query($connection, $query5);
				echo "success";
			}
		} else if($type == 2){
			$notification_string = createCommentString($connection, $to_user, $post_id);								$query4 = "DELETE FROM notification_string WHERE to_user = $to_user AND post_id = $post_id AND type = $type";
			$query5 = "INSERT INTO notification_string(type, to_user, post_id, notif_string) VALUES ($type, $to_user, $post_id, '$notification_string')";
			if(mysqli_query($connection, $query4)){
				$r = mysqli_query($connection, $query5);
				echo "success";
			}
		}
	}


	//Function to create notification string for Like
	function createLikeString($conn, $to_user_id, $post_id){
		$query2 = "SELECT from_username FROM notifications WHERE to_user_id = $to_user_id AND post_id = $post_id AND type = 1 ORDER BY timestamp DESC LIMIT 2";
		$query3 = "SELECT COUNT(from_username) AS result FROM notifications WHERE to_user_id = $to_user_id AND post_id = $post_id AND type = 1";
		$usernames = mysqli_query($conn, $query2);
		$count = mysqli_query($conn, $query3);
		$i = 0;
		$username = array();
		while($row = mysqli_fetch_assoc($usernames)){
			$username[$i] = $row["from_username"];
			$i++;
		}
		$count_actual = mysqli_fetch_assoc($count);
		$count_result = $count_actual["result"];
		if($count_result == 1){
			$string = $username[0]." likes your post";
			return $string;
		}else if($count_result == 2){
			$string = $username[0]." and ".$username[1]. " like your post";
			return $string;
		}else if($count_result == 3){
			$string = $username[0].", ".$username[1]. " and 1 other like your post";
			return $string;
		}else if($count_result > 3){
			$c = $count_result - 2;
			$string = $username[0].", ".$username[1]." and ".$c." others like your post";
			return $string;
		}
		
	}

	//Function to create notification string for Comment
	function createCommentString($conn, $to_user_id, $post_id){
		$query2 = "SELECT from_username FROM notifications WHERE to_user_id = $to_user_id AND post_id = $post_id AND type = 2 ORDER BY timestamp DESC LIMIT 2";
		$query3 = "SELECT COUNT(from_username) AS result FROM notifications WHERE to_user_id = $to_user_id AND post_id = $post_id AND type = 2";
		$usernames = mysqli_query($conn, $query2);
		$count = mysqli_query($conn, $query3);
		$i = 0;
		$username = array();
		while($row = mysqli_fetch_assoc($usernames)){
			$username[$i] = $row["from_username"];
			$i++;
		}
		$count_actual = mysqli_fetch_assoc($count);
		$count_result = $count_actual["result"];
		if($count_result == 1){
			$string = $username[0]." commented on your post";
			return $string;
		}else if($count_result == 2){
			$string = $username[0]." and ".$username[1]. " commented on your post";
			return $string;
		}else if($count_result == 3){
			$string = $username[0].", ".$username[1]. " and 1 other commented on your post";
			return $string;
		}else if($count_result > 3){
			$c = $count_result - 2;
			$string = $username[0].", ".$username[1]." and ".$c." others commented on your post";
			return $string;
		}
	}
	