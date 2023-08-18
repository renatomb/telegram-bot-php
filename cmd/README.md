# Diretório de comandos

## O que são comandos?

Comandos são mensagens precedidas por / enviadas ao bot

## Como os comando são tratados?

Cada comando enviado ao bo (ex.: `/start`), será executado o arquivo correspondente (ex.: `start.php`) que deve estar neste diretório.

## Parâmetros

Os parâmetros são todos os textos que seguem o comando. Por exemplo, no comando `/start 123`, o parâmetro é `123`. Ele estará armazenado na variável `$param` para ser tratado pelo arquivo do comando correspondente (ex.: `start.php`).