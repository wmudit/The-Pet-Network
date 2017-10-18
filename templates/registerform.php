<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/signin/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="register.php" enctype="multipart/form-data">
        <h2 class="form-signin-heading" style="color: #007bff">Register</h2>
        
        <label for="firstName" class="sr-only">First Name</label>
        <input type="text" id="firstName" class="form-control" placeholder="First Name" name="firstName" required autofocus>
        <label for="lastName" class="sr-only">Last Name</label>
        <input type="text" id="lastName" class="form-control" placeholder="Last Name" name="lastName" required >        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required >
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <small class="form-text text-muted">Choose a profile image</small>
        <label for="profile_img" class="sr-only">Profile image</label>
        <input type="file" id="image" name="image" class="form-control"><br>
        <label for="gender" class="sr-only-focusable">Gender:</label>
        <input type="radio" name="gender" value="male" checked> Male
  		<input type="radio" name="gender" value="female"> Female
  		<input type="radio" name="gender" value="other"> Other
        <div>
			<h5><small><a href="login.php" style="text-decoration: none; color: #007bff">Already registered? Sign In</a></small></h5>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Register" name="submit">Register</button>
      </form>

    </div> <!-- /container -->

    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
		