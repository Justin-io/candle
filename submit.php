<?php
if (isset($_POST['submit_1'])) {
    $name = $_POST['name_1'];
    $phone = $_POST['phone_1'];
    $mailFrom = $_POST['mail_1']
    $feedback = $_POST['feedback_1'];
    $subject = $_POST['subject_1'];
    // Here, you can perform additional processing or validation with the submitted data
$mailTo = "get.contact.candle@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have a email from ".$name_1.".\n\n\n"."the suggestion from".$name_1."is".$feedback_1;
    
    mail($mailTo, $subject_1, $txt, $headers);
    // Redirect the user to a thank-you page or display a success message
    header('Location: assets/thank_you.html');
    exit();
}
// Save the data to a file or database
    $data = "Name: $name_1\nPhone: $phone_1\nfeedback: $feedback_1\n";
    file_put_contents('form_data.txt', $data, FILE_APPEND | LOCK_EX);

?>
