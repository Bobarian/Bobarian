<?php

session_start();
require_once 'classes/Membership.php';
$membership = new Membership();

if($_POST && !empty($_POST['username']) && !empty($_POST['pwd']) {
	$response = $membership->validate_User($_POST['username'], $_POST['pwd'];

}

?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<link rel="stylesheet" href="loginpage.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<TITLE>Login to access the secret files.</TITLE>
</HEAD>

<BODY>
<div id="login">
	<form method="post" action="">
		<h2>Login <small>enter your credentials.</small></h2>
		<p>
			<label for="name">Username: </label>
			<input type="text" name="username" />
		</p>
		
		<p>
			<label for="pwd">Password: </label>
			<input type="password" name="pwd" />
		</p>
		
		<p>
			<input type="submit" id="submit" value="Login" name="submit" />
		</p>
	</form>
	
	<?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>"; ?>



</BODY>

</HTML>