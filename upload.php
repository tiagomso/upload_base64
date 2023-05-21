<?php

require_once 'BancoDados.class.php';

// Verifica se o diretório existe
if (!is_dir("gravacoes")) {
    $res = mkdir("gravacoes", 0777);
}

//Nome do arquivo que sera gravado
$filename = 'gravacoes/' . 'audio_gravado_' . date('Y-m-d-H-i-s') . '.mp3';

// Recupera a string com o base64
// Cria o arquivo no diretório
$base64 = isset($_POST['audio-base64']) ? $_POST['audio-base64'] : "";
$textoGerado = isset($_POST['texto-gerado']) ? $_POST['texto-gerado'] : "";
file_put_contents($filename, file_get_contents($base64));

//Use para inserir o BASE 64 em banco de dados.
$sql = "INSERT INTO tbl_audio_blob (nm_arquivo, txt_resposta, txt_base64, content_type) VALUES ('$filename', '$textoGerado', '$base64', 'audio/mpeg');";
echo $sql;
BancoDados::Select($sql);

//Rode o código antes na base 


