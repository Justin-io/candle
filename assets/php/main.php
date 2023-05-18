
<?php
// define variables and set to empty values
$subs-phoneErr = "";
$website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["subs-phone"])) {
    $subs-phoneErr = "phone with whatsapp is required";
  } else {
    $subs-phone = test_input($_POST["subs-phone"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


