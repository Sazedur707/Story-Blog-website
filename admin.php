<?php
$password = "saji707"; // Set the password

// Check if the password form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $enteredPassword = $_POST["password"];

  if ($enteredPassword === $password) {
    // Read the content of the form_data.txt file
    $fileContent = file_get_contents("form_data.txt");

    // Display the form data
    echo nl2br($fileContent);
    exit; // Exit to prevent displaying the password form after successful login
  } else {
    $errorMessage = "Incorrect password. Access denied.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<body>
  <h2>Admin Panel</h2>
  <?php if (isset($errorMessage)): ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
  <?php endif; ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
