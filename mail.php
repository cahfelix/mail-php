<?php 

$data      = date("d/m/y"); // função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR']; // função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; // função para pegar o navegador do visitante
$hora      = date("H:i"); // para pegar a hora com a função date


$nome		 = $_POST["nome"];
$email 		 = $_POST["email"];
$telefone    = $_POST["telefone"];
$cidade      = $_POST["cidade"];
$estado      = $_POST["estado"];
$mensagem    = $_POST["mensagem"];
$assunto 	 = "Nome do Site - Contato ";

$message = "<strong>Nome: 		</strong>$nome <br />
			<strong>Email: 		</strong>$email<br />
			<strong>Enviado: 	</strong>$data $hora<br />
			<strong>Telefone: 	</strong>$telefone<br /> 
			<strong>Cidade: 	</strong>$cidade<br /> 			
			<strong>Estado: 	</strong>$estado<br /> 		
			<strong>Assunto: 	</strong>$assunto<br /> 
			<strong>Conteudo: 	</strong>$mensagem<br /> <br /> 
			<strong>Ip: 		</strong>$ip<br /> 
			<strong>Navegador:  </strong>$navegador";

$email_remetente = "contato@site.com.br";
$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: $email_remetente"; // remetente
$headers .= "Return-Path: $email_remetente"; // return-path
$headers .= "Reply-To: $email_usuario"; // Endereço (devidamente validado) que o seu usuário informou no contato
$envio = mail("contato@site.com.br", $assunto, $message, $headers, "-f$email_remetente");


echo "<META HTTP-EQUIV=REFRESH CONTENT= '0; URL=contato.html'>
<script type=\"text/javascript\">
alert(\"$nome, sua mensagem foi enviada com sucesso!\");
</script>
";

?>