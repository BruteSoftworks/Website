<?php
  // Replace contact@example.com with receiving email address
defined('Mail_Send') || define('Mail_Send', 'david@brutesoftworks.com');
defined('Mail_CC') || define('Mail_CC', 'CC: david@brutesoftworks.com\r\n');
//  $receiving_email_address = 'david@brutesoftworks.com';

//$whatINeed = explode('/', $_SERVER['REQUEST_URI']);
//$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]/$whatINeed[1]";
//$actual_link = "$_SERVER[HTTP_HOST]/$whatINeed[1]";
//$php_email_form = $actual_link.'/assets/vendor/php-email-form/php-email-form.php';
//include_once "assets/vendor/php-email-form/php-email-form.php";
//include $php_email_form;
//echo $actual_link;

//echo file_exists($php_email_form);

/*if( ($php_email_form)) {
  echo "hello";
} else {
  die( 'Unable to load the "PHP Email Form" Library!');
}*/


/*if( file_exists($php_email_form = 'assets/vendor/php-email-form/php-email-form.php' )) {
  include( $php_email_form );
} else {
  die( 'Unable to load the "PHP Email Form" Library!');
}*/

/*$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->add_message( $_POST['name'], 'From');
$contact->add_message( $_POST['email'], 'Email');
$contact->add_message( $_POST['message'], 'Message', 10);

echo $contact->send();*/

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
