<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    $para = 'firminoferreirasilva@gmail.com';
    $assunto = 'Novo contato do site';
    $mensagem = "Nome: $nome\n\nEmail: $email\n\nMensagem: $mensagem";
    $cabecalhos = "From: $nome <$email>";
    
    if (mail($para, $assunto, $mensagem, $cabecalhos)) {
      echo 'Mensagem enviada com sucesso!';
    } else {
      echo 'Erro ao enviar mensagem';
    }
  }
?>
