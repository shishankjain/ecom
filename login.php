<?php

$conn = new mysqli("localhost", "root", "", "goease");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$mobno = $_REQUEST['mobno'];
$pass= $_REQUEST['pass'];
$email = $_REQUEST['email'];

$sql = "SELECT `Password` FROM main WHERE `Email ID`='$email' AND `Password`='$pass'";
$temp=0;
$k=0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $temp++;
    }
} else {
    $k= print "<script>alert('Sorry, password do not match');</script>";
}
echo $k;
//if($k!=0) {
//    header("Location: http://localhost/goease1-master/login.html");
//}
if ($temp!=0) {
    header("Location: http://localhost/goease1-master/");
} else {

}
$conn->close();

?>
