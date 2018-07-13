<?php
$servername = "localhost";

$username_con = "root";

$password_con = "password123";

//

////Create connection

$conn = new mysqli($servername, $username_con, $password_con, 'nevs_national_db', '3306');

//

//

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

else{

	//echo "You connected";	

}
?>