<?php session_start(); /* Starts the session */
include('common.php');	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		/* You can change username and associated password array to your pref*/
		$logins = array('Henry' => '123456','Bill Gates' => 'password1','Ada Lovelace' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$Username;
			header("location:matches");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Script Without Using Database</title>
<!-- <link href="./css/style.css" rel="stylesheet"> -->
<link href="nerdieluv.css" rel="stylesheet">
<!-- 


-->
</head>
<body>
<div id="Frame0">
 <!--  <h1>Sample H1</h1> -->

</div>
<img id='bannerarea' src="logo.png" alt="Logo">


<form action="" method="post" name="Login_Form">
<fieldset>
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Name</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
	   <!-- <td>     <tr> Username  => Henry' Password => '123456'     </tr> --> 
	   </td>
    </tr>
  </table>
  </fieldset>
</form>

<?PHP
siteinfo();
 ?>
</body>
</html>