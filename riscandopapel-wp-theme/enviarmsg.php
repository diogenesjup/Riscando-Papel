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
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtplw.com)
$mail->Username = 'site@servidorseguro.cloud'; // Usuário do servidor SMTP (site@enviador.casteloviana.com.br)
$mail->Password = ''; // Senha do servidor SMTP (Website0--)
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = 'site@servidorseguro.cloud'; // Seu e-mail
$mail->Sender = 'site@servidorseguro.cloud'; // Seu e-mail
$mail->FromName = 'Riscando Papel'; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('comercial@vetorempilhadeiras.com.br');
//$mail->AddCC('andersondiaszn@outlook.com', 'Simulador de Imóveis - Anderson'); // Copia
$mail->AddBCC('diogenesjunior.ti@gmail.com'); // Cópia Oculta
$mail->AddBCC('luiz.sd@gmail.com'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Novo newsletter Vetor Empilhadeiras"; // Assunto da mensagem

$nome = $_POST["nome"];
$empresa = $_POST["empresa"];
$cnpj = $_POST["cnpj"];
$ddd_telefone = $_POST["ddd_telefone"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$como_conheceu = $_POST["como_conheceu"];
$ramo = $_POST["ramo"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$mail->Body = "<div style='font-family:Calibri;font-size:1.3em'>

                    <h3>Novo contato vindo do site VETOR EMPILHADEIRAS</h3>
                    Esses dados vieram do formulário de <b>CONTATO</b><br><br>

                    <b style='color:#555;'>Nome:</b> $nome <br>
                    <b style='color:#555;'>Empresa:</b> $empresa  <br>
                    <b style='color:#555;'>CPF/CNPJ:</b> $cnpj <br>
                    <b style='color:#555;'>Telefone:</b> $ddd_telefone <br>
                    <b style='color:#555;'>Cidade:</b> $cidade <br>
                    <b style='color:#555;'>Estado:</b> $estado  <br>
                    <b style='color:#555;'>E-mail:</b> $email <br>
                    <b style='color:#555;'>Como conheceu:</b> $como_conheceu <br>
                    <b style='color:#555;'>Ramo de atividade:</b> $ramo <br>
                    <b style='color:#555;'>Assunto:</b> $assunto  <br>
                    <b style='color:#555;'>Mensagem:</b> $mensagem 

              </div>";
 
// Envia o e-mail
if($nome!="" && $email!=""): $enviado = $mail->Send(); endif;
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

?>