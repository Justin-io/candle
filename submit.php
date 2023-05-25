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



$nameErr = $mailErr = $phoneErr = "";
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
