<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $assunto = $_POST["subject"];
    $mensagem = $_POST["message"];
    
    // Configurações de e-mail
    $to = "larissaouchaski@gmail.com.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Nova mensagem de contato: $assunto";
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Mensagem: $mensagem\n";
    $headers = "From: $email";
    
    // Enviar e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
