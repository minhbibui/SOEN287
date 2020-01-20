<html>
	<body>
	
	<?php
		$myFile=fopen("users.txt","r+") or die("Unable to open file");
		$count=0;
		while(!feof($myFile))
		{	
			//$valueTemp=fgets($myFile);
			if(fgets($myFile)==$_POST["username"]."\r\n")
			{
				$_SESSION["name"]=$_POST["username"];
				echo ("<script LANGUAGE='JavaScript'>
						window.alert('The username already exist.Please try again');
						window.location.href='http://localhost/A3/q1/q1.html';
						</script>");
				$count=1;
			}
			//echo $valueTemp;
			
		}
		if($count==0)
		{
			session_start();
			$_SESSION["Name"]=$_POST["name"];
			$_SESSION["Email"]=$_POST["email"];
			$_SESSION["userName"]=$_POST["username"];
			$_SESSION["passWord"]=$_POST["password"];
			$value=$_POST["username"];
			fwrite($myFile,$_POST["username"]."\r\n");
			echo "<h1>Congratulations!!!</h1>";
			echo "<h2>The data is recorded.</h2>";
		}
		fclose($myFile);
	?>
	</body>
</html>