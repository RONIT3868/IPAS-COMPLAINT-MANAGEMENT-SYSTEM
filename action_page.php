<?php
$connection = mysqli_connect('localhost','root');

if ($connection) {
    echo "connection is established";

}
else{
    echo "ERROR connection failed";
}

mysqli_select_db($connection,'login credentials');

$uname = $_POST['uname'];
$psw = $_POST['psw'];


$data = "INSERT INTO dealer_login (uname,psw) VALUES ('$uname','$psw')" ;
mysqli_query ($connection, $data);
header('location:stored1.php');


?>