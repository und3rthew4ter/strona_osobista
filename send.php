<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kubi.trzaskowski@gmail.com";
    $subject = "Nowa wiadomoœæ z formularza kontaktowego";
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $body = "Imiê: $name\n";
    $body .= "Email: $email\n";
    $body .= "Wiadomoœæ:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomoœæ zosta³a wys³ana.";
    } else {
        echo "B³¹d podczas wysy³ania wiadomoœci.";
    }
} else {
    echo "Nieprawid³owe ¿¹danie.";
}
?>
