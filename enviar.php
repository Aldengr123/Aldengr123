<?php
 
  $nome = $_POST['nome'];
  $nomeempresa = $_POST['nomeempresa'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

 
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>Nome da empresa: </b>$nomeempresa</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  
  $destino = "jhonatan@horizontedoacai.com.br";
  $assunto = "Contato pelo Site";

  
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";


  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../home.html'>";
?>