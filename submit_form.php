<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Définir l'adresse email de destination
    $to = "lucasgaly.47510@gmail.com"; // Ton adresse email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Construire le corps du message
    $body = "Nom: $lastname\n";
    $body .= "Prénom: $firstname\n";
    $body .= "Email: $email\n";
    $body .= "Objet: $subject\n\n";
    $body .= "Message:\n$message\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Votre message a été envoyé avec succès !</p>";
    } else {
        echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
