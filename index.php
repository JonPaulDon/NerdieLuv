<?php session_start(); /* Starts the session */
include('common.php');

?>
<!DOCTYPE html>
<html>
<head>
<link href="nerdieluv.css" rel="stylesheet">
</head>
<body>


<img id='bannerarea' src="logo.png" alt="Logo">
<?PHP
if(isset($_SESSION['UserData']['Username'])){
	echo "<h2>Welcome {$_SESSION['UserData']['Username']}</h2>";
}
else {
	echo "<h2>Welcome!</h2>";
	//echo "<p><img src='signup.png' alt='sign up'><a href='signup.php'>Sign up for a new account</a></p>";
}

?>

<p><img src="matches.png" alt="matches"><a href="matches.php">Check your matches</a> <br><br></p>

<?php
siteinfo();
logoutbutton();
?>
</body>
</html>

