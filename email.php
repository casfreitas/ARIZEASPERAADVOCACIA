<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if ($_POST) {
  $nome     = isset($_POST['nome']) ? $_POST['nome'] : null;
  $email    = isset($_POST['email']) ? $_POST['email'] : null;
  $contato  = isset($_POST['contato']) ? $_POST['contato'] : null;
  $arquivo  = $_FILES['arquivo'];
  $mensagem = nl2br(trim($_POST['mensagem']));
}
$email_destinatario = "andre.silveira.freitas@gmail.com"; // Envia para o Comercial
$assunto = 'Contato do site Arize Áspera Advocacia';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  $mail->CharSet = "UTF-8";
  //$mail->isSMTP();
  $mail->SMTPDebug  = false;
  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'casfreitas.bahiana@gmail.com';
  $mail->Password   = 'zeavpgwmliewsrpt';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
  $mail->Port       = 465;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('casfreitas.bahiana@gmail.com', 'Arize Áspera Advocacia');
  $mail->addAddress('andre.silveira.freitas@gmail.com', 'Joe User');     //Add a recipient

  $mail->isHTML(true);
  $mail->Subject = $assunto;

  // CORPO DO EMAIL
  $email_conteudo  = "<strong>Nome:</strong>      $nome <br>";
  $email_conteudo .= "<strong>Email:</strong>     $email <br>";
  $email_conteudo .= "<strong>Contato:</strong>     $contato <br>";
  $email_conteudo .= "<strong>Mensagem:</strong><br>  <p>$mensagem</p>";

  // Anexar arquivo
  if ($arquivo['error'] == UPLOAD_ERR_OK) {
    $mail->addAttachment($arquivo['tmp_name'], $arquivo['name']);
  }

  $mail->Body  = $email_conteudo;
  $mail->send();

  // ENVIA MENSAGEM
  session_start();
  $_SESSION["msg"] = "<i class=\"fa-solid fa-circle-check me-2\"></i>Mensagem enviada com sucesso!";
  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
} catch (Exception $e) {

  // ENVIA MENSAGEM
  session_start();
  $_SESSION["erro"] = "<i class=\"fa-solid fa-xmark me-2\"></i>Ocorreu um erro ao enviar a mensagem: {$mail->ErrorInfo}";
  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
}
