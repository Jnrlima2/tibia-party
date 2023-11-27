<?php
// URL do site que contém os dados dos jogadores online
$url = 'https://retro.ferumbrinhaot.com.br/?subtopic=worlds&world=FerumbrinhaOT';

// Obtém o conteúdo da página
$html = file_get_contents($url);

// Procura pela string 'Players Online:' na página
preg_match('/Players Online:<\/td>\s*<td>(\d+)<\/td>/', $html, $matches);

if (isset($matches[1])) {
    // Retorna o número de jogadores online
    echo $matches[1];
} else {
    echo 'Não disponível';
}
?>
