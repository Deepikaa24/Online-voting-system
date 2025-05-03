<?php
$con=mysqli_connect("localhost","root","Php_123","voting system");
if($con){
    echo "Connection Sucessful";
}
else
{
    die(mysqli_error($con));
}
?>