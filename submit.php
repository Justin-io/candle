<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail']
    $feedback = $_POST['feedback'];
    $subject = "Phone Number"
    // Here, you can perform additional processing or validation with the submitted data
$mailTo = "get.contact.candle@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have a email from ".$name.".\n\n\n"."the suggestion from".$name."is".$feedback;
    
    mail($mailTo, $subject, $txt, $headers);
    // Redirect the user to a thank-you page or display a success message
    header('Location: assets/thank_you.html');
    exit();
}
// Save the data to a file or database
    $data = "Name: $name\nPhone: $phone\nfeedback: $feedback\n";
    file_put_contents('form_data.txt', $data, FILE_APPEND | LOCK_EX);
?>
