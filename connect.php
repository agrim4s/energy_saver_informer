 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "user_detail";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?> 