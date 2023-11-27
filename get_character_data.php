<?php
if (!isset($_GET['name'])) {
    echo 'Nome do personagem não fornecido';
    exit;
}

$name = $_GET['name'];
$url = 'https://retro.ferumbrinhaot.com.br/?subtopic=characters&name=' . urlencode($name);
$html = @file_get_contents($url);

if ($html === false) {
    echo 'Não foi possível obter os dados do personagem';
    exit;
}

$pattern = '/<td><b>Level:<\/b><\/td>\s*<td>(\d+)<\/td>/';

if (preg_match($pattern, $html, $matches)) {
    $nivel = $matches[1];
    echo ' ' . $name . ': ' . $nivel;
} else {
    echo ' ' . $name . ' não encontrado';
}
?>
