<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Affiliates (
AffiliateId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Email VARCHAR(50),
PhoneNumber VARCHAR(50) NOT NULL,
MomoAccountNumber VARCHAR(50) NOT NULL,
SponsorId INT(6) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "<script>
			window.alert('La table Affiliate a été crééee');
		 </script>";
} else {
	echo "<script>
			window.alert('Cette table existe déjà!');
		 </script>";
}

$conn->close();
?>