<?php
if( !isset($_POST['name'])) { die("No Direct Access"); } // Make sure the form as been submited

session_start();
$name = $_POST['name'];
if (!isset($_POST['organisation']))
    $organisation = 'unknown';
else
    $organisation = $_POST['organisation'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$spam = $_POST['username']; // This is my Honeypot field

if($spam)  // If the Honeypot field has been filled in
    die("No spamming allowed bitch!");
else {
    $header = 'MIME-Version: 1.0' . '\r\n';
    $header.= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
    $header.= 'From: ' . $email . '\r\n';
    $send = $name . ' from ' . $organisation . ' has sent you a message on your Portfolio.' . " \n \n";
    $send.= 'He says:' . " \n \n" . $message . " \n \n";
    $send.= 'To contact him: ' . $phone . ', ' . $email;

    if(mail('info@francisbeauchamp.com', $name . ' - Contact received', $send, $header)) {
        $_SESSION['thanks'] = 'Message sent !';
        $header = 'MIME-Version: 1.0' . '\r\n';
        $header.= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
        $header.= 'From: ' . $email . '\r\n';
        $send = 'A programmer has just received your message sent from his portfolio.';
        mail($email, 'Message delivered', $send, $header);
    }
    else
        $_SESSION['thanks'] = 'Message could not be delivered !';

    header( 'Location: contact.php' ) ;
}
?>
