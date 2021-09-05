
<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $cdl = $_POST['cdl'];
    $vehicle = $_POST['vehicle'];
    $why = $_POST['why'];
    $tickets = $_POST['tickets'];
    $message = $_POST['message'];

$email_from = "email@email";

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Cdl: $cdl.\n".
                "Vehicle: $vehicle.\n".
                "Why: $why.\n".
                "Tickets: $tickets.\n".
                "User Message: $message.\n";



$to = 'moodyshoaibi22@icloud.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>