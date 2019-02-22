<?php
function br(){
     echo "<br>";
}
$array ='{
    "cep": "01001-000",
    "logradouro": "Praça da Sé",
    "complemento": "lado ímpar",
    "bairro": "Sé",
    "localidade": "São Paulo",
    "uf": "SP",
    "unidade": "",
    "ibge": "3550308",
    "gia": "1004"
  }';
//json_decode(valor) converte para php de json

$endereco = json_decode($array);
 print_r($endereco);

 echo $endereco['cep'];

