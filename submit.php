<?php
if (isset($_POST['submit-1'])) {
    $name = $_POST['name-1'];
    $phone = $_POST['phone-1'];
    $mailFrom = $_POST['mail-1']
    $feedback = $_POST['feedback-1'];
    $subject = $_POST['subject-1'];
    // Here, you can perform additional processing or validation with the submitted data
$mailTo = "get.contact.candle@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have a email from ".$name-1.".\n\n\n"."the suggestion from".$name-1."is".$feedback-1;
    
    mail($mailTo, $subject-1, $txt, $headers);
    // Redirect the user to a thank-you page or display a success message
    header('Location: assets/thank_you.html');
    exit();
}
// Save the data to a file or database
    $data = "Name: $name-1\nPhone: $phone-1\nfeedback: $feedback-1\n";
    file_put_contents('form_data.txt', $data, FILE_APPEND | LOCK_EX);



$nameErr = $mailErr = "";
$name = $mail = $phone = $feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["mail"])) {
    $emailErr = "Email is required";
  } else {
    $mail = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailErr = "Invalid email format";
    }
  }
    
  }

  if (empty($_POST["feedback"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["feedback"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
