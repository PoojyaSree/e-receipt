<?php
$con=mysqli_connect('localhost', 'root','','miniproject');


$uname = $_POST['username'];
$psw = $_POST['password'];
$query=mysqli_query($con,"select * from login where username='$uname' and password='$psw'");
$num_rows=mysqli_num_rows($query);
if ($num_rows>0){
    header("Location:register.html");
}
else{
    echo "<script>alert('login failed')</script>";
    header("Location:login.php?msg=0");
}
?>