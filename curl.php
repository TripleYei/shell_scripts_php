#! /usr/bin/php

<?php

echo "Usando el script " . $argv[0];

$url = $argv[1];
echo shell_exec("curl $url");

?>