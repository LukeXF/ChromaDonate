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
?>