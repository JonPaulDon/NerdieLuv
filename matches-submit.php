<?php session_start(); /* Starts the session */
include('common.php');
verify();
?> 
<!DOCTYPE html>
 <html>
<head>
<link href="nerdieluv.css" rel="stylesheet">
</head>
<body>
<img id='bannerarea' src="logo.png" alt="Logo">
<!DOCTYPE html>
</body>
</html>
<?PHP 
//echo $_GET['name'];
//We need to write code to find the attributes for this name
$lines= file('singles.txt');
$ourUser=[];
$userFound=false;
$ourGender;
$ourAge;
$ourType;
$ourOS;
$ourLowerBound;
$ourUpperBound;

			foreach($lines as $line){
				
				$arr=explode(',',$line);
				if($_GET['name']==$arr[0]){
						//echo "found";
						$ourUser=$arr;
						$ourGender=$arr[1];
						$ourAge=$arr[2];
						$ourType=$arr[3];
						$ourOS=$arr[4];
						$ourLowerBound=$arr[5];
						$ourUpperBound=$arr[6];
						$userFound=true;
				}
			}
			if(!$userFound){
				exit();
			}
?>
<?PHP
//Now we must write code to find matches
foreach($lines as $line){
	$arr=explode(',',$line);
	//echo "<br>";
	//print_r($arr);
	//echo "<br>";
	$isMatch=true;
	$matchArr=[];
	//Check if the user is the opposite gender
	if($ourGender=='F'){
		if($arr[1]=='F'){
			$isMatch=false;
		//	echo "Falsified by gender! <br>";
		}
	}else {
		if($arr[1]=='M'){
			$isMatch=false;
	//		echo "Falsified by gender! <br>";
		}
		
	}
	//Check if the user is within the age range
	if($arr[2]<$ourUpperBound&&$arr[2]>$ourLowerBound){
		
	}else {
		$isMatch=false;
	//	echo "Falsified they're out of our age range! <br>";
	}
	if($ourAge<$arr[6]&&$ourAge>$arr[5]){
		
	} else {
		$isMatch=false;
	//	echo "Falsified we're out of their age range! <br>";
	}
	if($ourOS!=$arr[4]){
		$isMatch=false;
	//	echo "Falsified! <br>";
	}
	$str1=str_split($ourType);
	$str2=str_split($arr[3]);
	$commonLetters=0;
	for ($i = 0; $i <count($str1); $i++) {
	if($str1[$i]==$str2[$i]){
		$commonLetters++;
	}
}
if($commonLetters==0){
	$isMatch=false;
//	echo "Falsified! <br>";
}
 if($isMatch){
	// echo "<BR>";
	 //print_r($arr);
	 //echo "MATCH!!!!!!!!!!!!!!!!!!!!!!";
	 displaymatch($arr[0],$arr[1],$arr[2],$arr[3],$arr[4]);
	 
	 
 }
	
}
 ?>


<?php

//This is the closer for the page
siteinfo();
logoutbutton();
?>