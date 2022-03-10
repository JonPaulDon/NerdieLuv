<?php
//If the user is logged in, tell them and give them the option to log out.
function logoutbutton(){
	if(isset($_SESSION['UserData']['Username'])){
		echo "Congratulation! You have logged into a password protected page. <a href='logout.php'>Click here</a> to Logout.";
	}

}
//This function is supposed to reduce redundancy in my code, it provides the bottom part of the page containing info about the site that will be repeated on every page
function siteinfo(){
	echo "<p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! <br>
Thank you for using our site. <br> <br>
Results and page (C) Copyright NerdLuv Inc. <br>
</p>";
	echo "<p><img src='back.png' alt='back arrow'><a href='index.php'>Back to the front page</a><br></p>";
	
}
//This function checks if you've accessed a page meant for logged-in users without logging in. If you have, it takes you to the login page
function verify(){
	if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
	
}
}
function displaymatch($name,$gender,$age,$type,$os){
	
	$number=$age%10;
	$imagepath="./pfps/".$number.".jpg";
	echo "<div class='match'>
<p>".$name."
<img src=$imagepath alt='userimage' width='150'>
</p>
<table>
<tr>
<td>
<ul style='padding-left:0'>
  <li> <strong>Gender</strong>
 
  </li>
  <li><strong>Age:</strong>
  
  </li>
  <li><strong>Type:</strong>
  
  </li>
  <li><strong>OS:</strong>
  
  </li>
</ul>  
</td>
<td>
<ul style='padding-left:0'>
  <li>".$gender."
  </li>
  <li>
  ".$age."
  </li>
  <li>".$type."
  </li>
  <li>
  ".$os."
  </li>
</ul>  
</td>
</tr>
</table>

</div>
  ";
  
}



?>