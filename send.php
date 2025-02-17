<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your-email@example.com"; // כתובת המייל שלך
    $subject = "פנייה חדשה מאתר";
    $body = "שם: $name\nאימייל: $email\nהודעה:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>תודה, $name! ההודעה נשלחה בהצלחה.</h2>";
    } else {
        echo "<h2>אירעה שגיאה בשליחת המייל.</h2>";
    }
}
?>
