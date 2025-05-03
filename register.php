<?php
include('connect.php');
$username=$_POST['username'];
$mobileno=$_POST['mobile'];
$password=$_POST['password'];
$Cpassword=$_POST['Cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$Cpassword){
    echo '<script>
    alert("Passwords do not match");
    window.location="../voting/registration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql = "INSERT INTO `user data` (username, `mobile number`, `password`, photo, standard, status, votes)
        VALUES ('$username', '$mobileno', '$password', '$image', '$std', 0, 0)";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>
    alert("Registration Successful");
    window.location="../";
    </script>';
    }else{
        die(mysqli_error($con));
    }

}

?>