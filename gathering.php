
#! /usr/bin/php

# Uso de la herramienta dmitry para obtener información.
<?php

echo "Usando el script " . $argv[0];

$dominio = $argv[1];
echo shell_exec("dmitry -wn $dominio");



?>