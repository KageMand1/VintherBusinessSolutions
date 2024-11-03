<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Indsaml data fra formularen
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // E-mail modtager
    $to = "vinther.business.solutions@gmail.com";
    $subject = "Ny besked fra kontaktformularen";
    
    // E-mail indhold
    $emailContent = "Navn: $name\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Besked:\n$message\n";

    // E-mail headers
    $headers = "From: $email";

    // Send e-mailen
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Tak for din besked! Vi vender tilbage til dig hurtigst muligt.";
    } else {
        echo "Der opstod en fejl. Prøv igen senere.";
    }
}
?>
