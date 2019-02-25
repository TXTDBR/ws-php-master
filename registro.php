<?php
  require('./conexao.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $cep = $_POST['txtcep'];
      $logradouro = $_POST['txtlogradouro'];
      $bairro = $_POST['txtbairro'];
      $cidade = $_POST['txtcidade'];
      $estado = $_POST['txtestado'];
      $complemento = $_POST['txtcomplemento'];

      $link = getConnection();
   
    $query = "INSERT INTO tb_enderecos VALUES(null,'{$cep}', '{$logradouro}', '{$bairro}', '{$cidade}', '{$estado}', '{$complemento}')";
    echo $query;
    //exit;
    
        mysqli_query($link, $query);
        
        header('Location:form_endereco.html');
        die();
  }
