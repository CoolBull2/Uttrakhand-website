<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed :" . $conn->connect_error);
} else {
    echo "Connection succesfull" . "<br>";
}

$email = $_POST["Email"];
$pass = $_POST["Password"];

$sql = "select * from form where Email='$email' and Password='$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    header("Location: \Yogesh\Project 2 Uttrakhand\others\Signin\welcome.html");
    }
else {
    header("Location: \Yogesh\Project 2 Uttrakhand\others\Signin\login.html?error=true");
}

?>