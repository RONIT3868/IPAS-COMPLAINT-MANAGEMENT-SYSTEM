<?php
$connection = mysqli_connect('localhost','root');

if ($connection) {
    echo "connection is established";

}
else{
    echo "ERROR connection failed";
}

mysqli_select_db($connection,'comregister');







?>

