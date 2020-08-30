<?php

$Fname = filter_input(INPUT_POST, 'Fname');
$Lname = filter_input(INPUT_POST, 'Lname');
$Number = filter_input(INPUT_POST, 'Number');
$email = filter_input(INPUT_POST, 'email');
$Password = filter_input(INPUT_POST, 'Password');

if (!empty($Fname)) {
if (!empty($Lname)) {
if (!empty($Number)) {
if (!empty($email)) {
if (!empty($Password)) {
$host = "localhost";
$dbFname = "root";
$dbLname = "root";
$dbNumber = "root";
$dbemail = "root";
$dbPassword = "";
$dbname = "ML";

$conn = new mysqli ($host, $Fname, $Lname, $Number, $email, $Password);
if (mysqli_connect_error()) {
die('Connect Error ('.
mysqli_connect_errno(), ')'.
mysqli_connect_error());
}
else {
$sql = "INSERT INTO from (Fname, Lname, Number, email, Password)";
if ($conn->query($sql)) {
echo "New record is inserted sucessfully";
}
else {
echo "Error: ". $sql . "<br>" .$
conn-> error;
}
$conn->close();
}
}
}
}
}
else {
echo "Password should not be empty";
die();
}
}
else{
echo "Fname and Lname should not be empty"
die();
}
?>