<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'Zadeed' && $password == '106382225') {
		$_SESSION['user'] = $username;
		header('Location: welcome.php');
	} else {
		include("header.inc");
		echo "<p>Invalid login. <a href='login.php'>Try again</a></p>";
		include("footer.inc");
	}
?>
