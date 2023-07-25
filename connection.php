<?php
$connection = mysqli_connect('localhost','root');

if ($connection) {
    echo "connection is established";

}
else{
    echo "ERROR connection failed";
}

mysqli_select_db($connection,'comregister');

$division = $_POST['division'];
$hq = $_POST['hq'];
$userid = $_POST['userid'];
$username= $_POST['username'];
$mobile = $_POST['mobile'];
$complaint = $_POST['complaint'];


$data = "INSERT INTO details (division, hq, userid, username, mobile, complaint) VALUES ('$division','$hq','$userid', '$username', '$mobile','$complaint')" ;
mysqli_query ($connection, $data);
header('location:confirmation.php');


?>