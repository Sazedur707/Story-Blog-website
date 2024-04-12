<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Concatenate the form data into a string
  $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

  // Define the file path and name
  $file = "form_data.txt";

  // Open the file in append mode and write the form data
  if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
    echo "<script>alert('Message sent'); window.location.href = 'index.html';</script>";
    exit();
  } else {
    echo "<script>alert('Message not sent');</script>";
  }
}
?>
