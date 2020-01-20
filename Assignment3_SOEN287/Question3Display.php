<?php

//If the form is submitted with values, save them in SESSION and redirect to helloOut.php

if(isset($_POST['Submit'])){

session_start();

$_SESSION['inputToFormat'] = $_POST['inputToFormat'];

$_SESSION['fontSize'] = $_POST['fontSize'];

$_SESSION['controlColor'] = $_POST['controlColor'];

$_SESSION['isVisible'] = $_POST['isVisible'] == "true";

header('Location:process.php');

exit();

}

?>

<html>

<head></head>

<body>

<form action="Question3Process.php" method="POST">

<select name="inputToFormat">
  <option value="text">UserName</option>
  <option value="password">Password</option>
  <option value="submit">Login Button</option>
  <option value="background">background</option>
</select></br></br>

<label>Font Size: </label> <input type="range" name="fontSize" min="10" max="100" value="10"/><br/></br>

    <label>Control Color: <input type="color" name="controlColor" /><br/></br> </label>

    <label>Visible: <input type="checkbox" name="isVisible" checked="checked" value="true"/><br/></br></label>

<input type="Submit" value="Submit" name="Submit"/>

</form>

</body>

</html>