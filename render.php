<?php
require "mail.php";
$rcpt=$_GET['rcpt'];
$name = $_GET['name'];
$id = $_GET['id'];
$gend=$_GET['gend'];
$branch=$_GET['branch'];
$year=$_GET['year'];
$qt=$_GET['qt'];
$mop=$_GET['mop'];
$aadhar=$_GET['aadhar'];
$prntname=$_GET['prntname'];
$pphone=$_GET['pphone'];
$stdphone=$_GET['stdphone'];
$email=$_GET['email'];
$cu=$_GET['cu'];
$fee=$_GET['fee'];
header("content-type:image/jpg");

$file_name='template.jpg';
$img_source=imagecreatefromjpeg($file_name);
$text_color=imagecolorallocate($img_source, 0, 0, 0);
$fontpath = __DIR__."/font.otf";
//imagestring($img_source,5,$x, $y, $stdname,$text_color);
imagettftext($img_source,15,0,250,115,$text_color, $fontpath, $rcpt);
imagettftext($img_source,15,0,250,165,$text_color, $fontpath, $name);
imagettftext($img_source,15,0,250,220,$text_color, $fontpath, $id);
imagettftext($img_source,15,0,250,275,$text_color, $fontpath, $gend);
imagettftext($img_source,15,0,250,330,$text_color, $fontpath, $branch);
imagettftext($img_source,15,0,250,380,$text_color, $fontpath, $year);
imagettftext($img_source,15,0,250,440,$text_color, $fontpath, $qt);
imagettftext($img_source,15,0,250,500,$text_color, $fontpath, $mop);
imagettftext($img_source,15,0,250,550,$text_color, $fontpath, $aadhar);
imagettftext($img_source,15,0,250,610,$text_color, $fontpath, $prntname);
imagettftext($img_source,15,0,250,690,$text_color, $fontpath, $pphone);
imagettftext($img_source,15,0,250,790,$text_color, $fontpath, $stdphone);
imagettftext($img_source,15,0,250,880,$text_color, $fontpath, $email);
imagettftext($img_source,15,0,250,940,$text_color, $fontpath, $cu);
imagettftext($img_source,15,0,250,1000,$text_color, $fontpath, $fee);
imagejpeg($img_source);
imagejpeg($img_source,'image.jpg');

imagedestroy($img_source);

$send=new sendMail();
$send->send($email);

?>

