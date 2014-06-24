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
// Creates connection to database
$con = mysqli_connect(
/* Host address */	"localhost",
/* Username     */	"ChromaDonateUser",
/* Password     */	"CWbcfBGfuuq6RTuW",
/* DB Name      */	"ChromaDonate");

// Check connection of database
if (mysqli_connect_errno()) {
  echo "<br>Failed to connect to MySQL: <br><b>" . mysqli_connect_error() . "</b>";
}




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