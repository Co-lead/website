<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We've received your message:</p>";
    echo "<blockquote>" . nl2br($message) . "</blockquote>";
    echo "<p><a href='contact.php'>Go back</a></p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
