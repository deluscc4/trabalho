<?php
/*
     $nome_arquivo = $_FILES['alvara']['name'];
     $dir_arquivo = "uploads/";
     if(!is_dir($dir_arquivo)){
         mkdir($dir_arquivo); // Cria a pasta caso não exista
     }
     if(move_uploaded_file($_FILES['alvara']['tmp_name'], $dir_arquivo . $nome_arquivo)){
         echo "Arquivo carregado com sucesso";
     } else {
         echo "Erro ao carregar o arquivo";
     }
*/
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $desc_ipi = $_POST["desc_ipi"];
    $cod_cnae = $_POST["cod_cnae"];
    $checkbox = $_POST["checkbox"];
  
    $texto = $nome . "," . $endereco . "," . $telefone . "," . $desc_ipi . "," . $cod_cnae  . "," . 
    $checkbox . "\n";
    
    $arquivo = fopen("banco.csv", "a");
    fwrite($arquivo, $texto);
    fclose($arquivo);

    $arquivo_formatado = file_get_contents('banco.csv');

    echo "<pre>";
    echo $arquivo_formatado;
    echo "</pre>";
    
?>