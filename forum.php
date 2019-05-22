<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subjekt = $_POST['subjekt'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "viktor.kung@live.se";
    $headers = "From: " .$mailfrom;
    $txt = "mail från ".$name.".\n\n".$message;

    mail($mailTo, $subjekt, $txt, $headers);
    header("Location: index.php?mailsend");
}