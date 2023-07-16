<?php
/* 
MODELO DE ARQUIVO DE CONFIGURACAO
para utiliza-lo renomeie-o ou copie-o para o arquivo config.php
*/

// Configuração de Timezone
date_default_timezone_set('America/Recife');

// Configuração da conexão a banco de dados
define('SERVIDOR','localhost');
define('USUARIO','usuario_banco');
define('SENHA','SeNhA-Do-BaNcO!');
define('BANCO','nome_banco');

// Configuração do BOT no Telegram
define('DONO',123456); //Substituir com Telegram ID do dono do BOT que pode ser obtido via telegram através do bot: @userinfobot
define('APIKEY',"123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11"); //Substituir com APIKEY do BOT que pode ser obtido via telegram através do bot: @botfather
define('API',"https://api.telegram.org/" . APIKEY . "/"); //Url para requisições ao telegram, não alterar a não ser que saiba o que está fazendo.
?>