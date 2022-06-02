<?php
$hostname = "localhost:33"; //localhost (padrão), 33 é a porta, deve ser configurado no xampp, clique em config, abre o my.ini, ao abrir o arquivo será possivel ver duas vezes port: 3306, troque por 33 salve e feche 
$nome = "root"; //padrão (sistema)
$senha = ""; //caso tenha coloque, caso não (como é padrão de sistema) deixe vazio
$bancodadosnome = "db_turma63B";//nome do banco mysql
$bdtabela = "produtos"; //nome da tabela no banco mysql
$colunas = "nome"; //nome das colunas da tabela no banco mysql 
$colunas2 = "sku"; //nome das colunas da tabela no banco mysql 
$colunas3 = "informacoes"; //nome das colunas da tabela no banco mysql 

$banco = mysqli_connect($hostname, $nome, $senha); //conecta ao banco no mysql
mysqli_select_db($banco, $bancodadosnome); //seleciona o banco declarado em $bancodadosnome
$query = "SELECT * FROM $bdtabela"; //O que está entre aspas é um código mysql para selecionar a tabela e exibir
$resultado = mysqli_query($banco, $query); //guarda info (desculpa pra eu não ter que dizer que não sei o que faz)

if($resultado){ //puxa e exibe as infos
    while($row = mysqli_fetch_array($resultado)){
        $nome = $row["$colunas"]; //recebe uma coluna e seus valores
        echo "Nome:".$nome."<br/>"; // exibe
        $sobrenome = $row["$colunas2"];//recebe uma coluna e seus valores
        echo "Marca:".$sobrenome."<br/>";// exibe
        $idade = $row["$colunas3"];//recebe uma coluna e seus valores
        echo "Informações:".$idade."<br/>";// exibe
    }



}


?>