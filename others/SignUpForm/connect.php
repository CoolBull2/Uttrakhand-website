<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}
else{
    echo "Connection succesfull". "\n";
}

$email = $_POST["Email"];
$name = $_POST["Username"];
$pass = $_POST["Password"];
$number = $_POST["Pnumber"];

$sql = "insert into form values ('$name','$email','$pass','$number')";

if($conn->query($sql)==TRUE){
    echo "New record created successfully";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();

header("Location: \Yogesh\Project 2 Uttrakhand\index.html");
?>