<?php 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.umbler.com"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host email-ssl.com.br)
$mail->Port = 587;
$mail->SMTPAuth = true; 
$mail->Username = 'site@servidorseguro.cloud'; 
$mail->Password = ''; 
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = 'site@servidorseguro.cloud'; // Seu e-mail
$mail->Sender = 'site@servidorseguro.cloud'; // Seu e-mail
$mail->FromName = 'Riscando Papel'; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAddress('juliocbjr2008@gmail.com');
$mail->AddBCC('diogenesjunior.ti@gmail.com'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Novo e-mail para newsletter Riscando Papel"; // Assunto da mensagem

$email = $_POST["email"];

$mail->Body = "<div style='font-family:Arial;font-size:15px;'>

                    <h3>Novo e-mail para newsletter RISCANDO PAPEL</h3>
                    Esses dados vieram do formulário de <b>NEWSLETTER</b><br><br>

                    <b style='color:#555;'>E-mail:</b> $email <br>

              </div>";
 
// Envia o e-mail
if($email!=""): $enviado = $mail->Send(); endif;
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

?>