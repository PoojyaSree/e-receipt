<?php
$con = mysqli_connect('localhost', 'root','','miniproject');

$stdid = $_POST['stdid'];
$receipt=$_POST['receipt'];
$stdname = $_POST['stdname'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$quota = $_POST['quota'];
$mop = $_POST['mop'];
$aadhar = $_POST['aadhar'];
$prntname = $_POST['prntname'];
$stdphone = $_POST['stdphone'];
$prntphone = $_POST['prntphone'];
$email = $_POST['email'];
$chqupi = $_POST['chqupi'];
$fee = $_POST['fee'];
$sql = "insert into st(receiptno,stname,stid,gender,branch,year,quota,mop,aadhar,ptname,stmobile,ptmobile,email,chequpi,amount)values('$receipt','$stdname', '$stdid','$gender','branch','$year','$quota','$mop', '$aadhar', '$prntname','$stdphone','$prntphone','$email','$chqupi','$fee');";
$rs = mysqli_query($con,$sql) or die("cannot insert") ;

header("Location:render.php?name=".$stdname."&id=".$stdid."&gend=".$gender."&branch=".$branch."&year=".$year."&qt=".$quota."&mop=".$mop."&aadhar=".$aadhar."&prntname=".$prntname."&pphone=".$prntphone."&stdphone=".$stdphone."&email=".$email."&cu=".$chqupi."&fee=".$fee."&rcpt=".$receipt);
?>

