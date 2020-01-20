<html>
<?php
session_start();

$inputToFormat = $_SESSION['inputToFormat'];

$fontSize = $_SESSION['fontSize'];

$controlColor = $_SESSION['controlColor'];

if(isset($_SESSION['isVisible']))
{
		if($_SESSION['isVisible'] == true)
		{
			$isVisible="visible";
		}
}
else
{
	$isVisible="hidden";
}

// Print the stylesheet with the values from the SESSION

echo "<style type='text/css'>";

echo "input[type='".$inputToFormat."']{";

echo "font-size: ".$fontSize.";";

echo "background-color: ".$controlColor.";";

echo "visibility: ".$isVisible;

echo "}\n";
if($inputToFormat=="background")
{
		echo "body{background-color:".$controlColor.";}";
}
echo "</style>";
?>
<body>
<form>

<input type="text" placeholder="Mobile number"/><br/>

<input type="password" placeholder="PIN"/><br/>

<input type="submit" value="Login"/>

</form>
</body>
</html>