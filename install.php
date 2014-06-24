<?php require 'assets/header.php'; ?>

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

<?php require 'assets/footer.php'; ?>