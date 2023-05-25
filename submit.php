<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $feedback = $_POST['feedback'];

    // Here, you can perform additional processing or validation with the submitted data

    // Save the data to a file or database
    $data = "Name: $name\nPhone: $phone\nfeedback: $feedback\n";
    file_put_contents('form_data.txt', $data, FILE_APPEND | LOCK_EX);

    // Redirect the user to a thank-you page or display a success message
    header('Location: assets/thank_you.html');
    exit();
}
?>
