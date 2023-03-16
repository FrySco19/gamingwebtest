<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "minic9679@gmail.com";
  $subject = "Nuova recensione ricevuta";
  $message = "Nome: " . $_POST["name"] . "\r\n";
  $message .= "Email: " . $_POST["email"] . "\r\n";
  $message .= "Recensione: " . $_POST["review"] . "\r\n";
  $message .= "Voto: " . $_POST["stars"] . "\r\n";
  $headers = "From: noreply@example.com\r\n";
  $headers .= "Reply-To: noreply@example.com\r\n";
  $headers .= "Content-type: text/plain\r\n";
  mail($to, $subject, $message, $headers);
}
?>
