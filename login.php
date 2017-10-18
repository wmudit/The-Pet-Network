<?php include_once 'config/init.php'; ?>

<?php
	
	$user_class_obj = new User;

	if(isset($_POST['submit'])){
		
		$user = array();
		$user['email'] = $_POST['email'];
		$user['password'] = $_POST['password'];
		
		if($user_class_obj->login($user)) {
			$details = $user_class_obj->getuserDetails($user);
			$_SESSION['user_id'] = $details->user_id;
			$_SESSION['firstname'] = $details->first_name;
			$_SESSION['lastname'] = $details->last_name;
			$_SESSION['username'] = $details->username;
			$_SESSION['email'] = $details->email;
			$_SESSION['profile_img'] = $details->profile_img;
			redirect('index.php', 'Login successful', 'success');
		} else {
			redirect('login.php', 'Error logging in', 'error');
		}
		
	}

	$template = new Template('templates/loginform.php');
	$template->title = 'Sign In';

	echo $template;