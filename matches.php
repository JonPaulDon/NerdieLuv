<?php session_start(); /* Starts the session */
include('common.php');
verify();

?>
<?PHP

?>
<!DOCTYPE html>
<html>
<head>
<link href="nerdieluv.css" rel="stylesheet">
</head>
<body>
<img id='bannerarea' src="logo.png" alt="Logo">


<form action="./matches-submit.php" method="get">
<fieldset>
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Returning User</h3></td>
    </tr>
    <tr>
      <td align="left" valign="top">Name</td>
      <td>
	
        <input type="text" id="name" name="name" />
    
</form>
	  
	  </td>
    </tr>
    
    <tr>
     
      <td colspan="2"><input name="Submit" type="submit" value="View my Matches" class="Button3"></td>
	   <!-- <td>     <tr> Username  => Henry' Password => '123456'     </tr> --> 
	   </td>
    </tr>
  </table>
  </fieldset>
<!DOCTYPE html>
</body>
</html>
<?php
//This is the closer for the page
siteinfo();
logoutbutton();
?>