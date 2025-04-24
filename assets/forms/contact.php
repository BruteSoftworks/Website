<?php
defined('Mail_Send') || define('Mail_Send', 'david@brutesoftworks.com');
defined('Mail_CC') || define('Mail_CC', 'CC: david@brutesoftworks.com\r\n');

$format_data =
    '<h4>User Tracking Information: </h4></br>' .
    '<p><strong>From: </strong>' . $_POST['name'] . '</p>' .
    '<p><strong>Email: </strong>' . $_POST['email'] . '</p>' .
    '<p><strong>Message: </strong>' . $_POST['message'] . '</p>';

$to = Mail_Send;
$subject = $_POST['subject'] . ' ' . gmdate("Y-m-d H:i:s");
$txt = $format_data;
$headers = 'From: ' . $_POST['email'] . '\r\n';
$headers .= Mail_CC;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to,$subject,$txt,$headers);
?>
