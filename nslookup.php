#! /usr/bin/php

<?php

echo "Usando el script " . $argv[0];

$dominio = $argv[1];
echo shell_exec("nslookup $dominio");



?>