<?php
 //$username = $_GET["username"];
 //$password = $_GET["password"];
 //$first_name = $_GET["first_name"];
// $last_name = $_GET["last_name"];
 //$email = $_GET["email"];

 $username = $_POST["username"];
 $password = $_POST["password"];
 $first_name = $_POST["first_name"];
 $last_name = $_POST["last_name"];
 $email = $_POST["email"];


 // echo "The user information is below <br />";
 //echo "username: " . $username ."<br />";
 //echo "password: " . $password . "<br />";
 //echo "first_name: " . $first_name . "<br />";
 //echo "last_name: " . $last_name . "<br />";
 //echo "email: " . $email;

 $serverName = "localhost";
$server_username = "root";
$server_password ="";
$dbname ="online";


$conn = mysqli_connect($serverName, $server_username, $server_password, $dbname);

if (!$conn) {
	die("connection failed: " .mysql_connect_error());
}
if(empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($phone) || empty($address) || empty($gender)){
    header("location: register.php?message=fill up the empty fields");
}
$sql = "SELECT  id, username, password, first_name, last_name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

}else {

}
$sql ="INSERT INTO users (username, password, first_name, last_name, email)
VALUES ('$username', '$password', '$first_name', '$last_name', '$email')";

if ($conn->query($sql) == TRUE) {
	echo "<div style='margin-top: 2rem; padding: 1rem; background-color:blue; color:white; margin: 0 auto; width: 50%'>
    Registration completed successfully
    </div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 ?>



