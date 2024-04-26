<?php

// Replace these with your desired username and hashed password
$username = "User";
$hashed_password = "User";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Verify username and password (replace with your verification logic)
  if ($username == $_POST["username"] && password_verify($_POST["password"], $hashed_password)) {
    // Successful login - Display contact form or confirmation message
    echo "<h1>Success!</h1>";
    echo "<p>Thank you for contacting me, " . $name . ". I will get back to you soon.</p>";
  } else {
    // Login failed - Display error message and redirect back to contact form
    echo "<h1>Login Failed</h1>";
    echo "<p>Invalid username or password. Please try again.</p>";
    header("Refresh:0; url=contact.html"); // Redirect back to contact form after 0 seconds
  }
} else {
  // Not a POST request - Redirect back to contact form
  header("Location: contact.html");
  exit();
}

?>
