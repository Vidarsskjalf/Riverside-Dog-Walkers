<?php

if(isset($_POST["submit"])) {
$name = $_post["name"];
$subject = $_post["subject"];
$mailFrom = $_post["mail"];
$message = $_post["message"];

$mailTo = "jhavig99@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: contact.php?mailsend");
}