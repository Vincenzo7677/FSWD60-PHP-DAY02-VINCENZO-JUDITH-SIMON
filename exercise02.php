<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST">
Name: <input type="text" name="name"/>
Surname <input type="text" name="surname"/>
<input type="submit" name="submit"/>
</form>

<?php
if(isset($_POST['submit'])){
if($_POST['name'] || $_POST['surname']){
echo "Welcome ".$_POST['name']." ".$_POST['surname']."<br>";
} else { 
echo "Please insert your name, or please insert your surname";
	}
}
?>


</body>
</html>