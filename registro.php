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
   
    $query = "insert into tb_enderecos values('$cep', '$logradouro', '$bairro', '$cidade', '$estado', '$complemento')";
    echo $query;
    //exit;
    
        mysqli_query($link, $query);
        return true;
        header("location:form_endereco.htm");
        die();
  }