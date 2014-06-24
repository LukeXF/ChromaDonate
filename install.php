<!doctype html>
<html lang="en">
<head>

	<title>Chroma Hills - Donate</title>
	<meta name="description" content="Chroma Hills donation system for fans of the Chroma Hills resource pack.">
	<meta name="author" content="Luke Brown">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1>ChromaDonate - Install</h1>

<?php
echo "PHP Test!";
?>

<?php
	require 'protected/config.php';
?>

<?php


// Create table
$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql)) {
  echo "Table persons created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

$sql = "CREATE TABLE Persons
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
FirstName CHAR(15),
LastName CHAR(15),
Age INT
)";

?>

</body>
</html>