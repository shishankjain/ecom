<?php

$conn = new mysqli("localhost", "root", "", "goease");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_REQUEST['name'];
$pass= $_REQUEST['pass'];
$email = $_REQUEST['email'];

$sql = "SELECT `Email ID` FROM main WHERE `Email ID`='$email'";
$result = $conn->query($sql);
$temp=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $temp++;
    }
} else {
    header("Location: http://localhost/goease1-master/");
}
if($temp==0) {
    $sql = "INSERT INTO main (`S.No`, `Email ID`, `Password`,`Name`) VALUES (NULL, '$email', '$pass','$name');";

    if ($conn->query($sql) === TRUE) {
        echo "WELCOME TO GOEASE";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    print_r("Sorry there's a user with this email Id");
}
$conn->close();


