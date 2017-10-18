<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<!--<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">-->
</head>

<body class="w3-theme-l5">

	<!-- Navbar -->
	<div class="w3-top w3-theme-d2">
 		<div class="w3-bar w3-theme-ds2 w3-left-align w3-large">
  			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  			<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="text-decoration: none"><i class="fa fa-home w3-margin-right"></i>THE PET NETWORK</a>
  			<a href="adoption.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Adopt a buddy"><i class="fa fa-paw"></i></a>
  			<!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>-->
  			<!--<div class="w3-dropdown-hover w3-hide-small">
    			<button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    			<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      				<a href="#" class="w3-bar-item w3-button">One new friend request</a>
      				<a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      				<a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    			</div>
  			</div>-->
  			<!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  			<img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar">
  			</a>-->
  			<a href="signout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="Sign out"><i class="fa fa-sign-out"></i></a>
 		</div>
	</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>


