<?php include_once 'config/init.php';

	session_unset();
	redirect('login.php', 'Signed out', 'success');