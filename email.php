<?php

// Connect to the database
$host = "localhost";
$user = "root";
$password = '';
$dbname = "userInformation";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the form
$data = $_POST["data"];

// Insert the data into the table
$sql = "INSERT INTO emails (email) VALUES ('$data')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
