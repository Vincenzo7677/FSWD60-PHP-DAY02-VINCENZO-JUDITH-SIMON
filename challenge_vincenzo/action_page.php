<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "TestData";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
// attempt insert query execution
$sql = "INSERT INTO customer (First_Name, Last_Name, Email, Phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";
if (mysqli_query($conn, $sql)) {
   echo "<h1>New record created.<h1>";
} else {
   echo "<h1>Record creation error for: </h1>" . 
         "<p>" . $sql . "</p>" . 
         mysqli_error($conn);
}
?>