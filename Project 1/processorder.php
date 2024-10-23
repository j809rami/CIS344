<!DOCTYPE html>
<html>
  <head>
    <title>Appointment Confirmation Page - Joses Tutoring</title>
  </head>
  <body>
    <h1>Joses Tutoring Services</h1>
    <h2>Appointment Confirmation Page</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $subject = htmlspecialchars($_POST['subject']);
        $date = htmlspecialchars($_POST['date']);
        $currentdate = date('H:i, jS F Y'); 

        // Confirmation message for the end user

        echo "<p>Thank you, $name! Your order for a $subject tutoring session on $date has been processed. Your session was processed on $currentdate.</p>";
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>
    <a href="index.php">Interested in another session? Return to the main page here.</a>
  </body>
</html>
