<?php
// aula de INCLUDE E REQUIRE
include_once 'aula_04.php';
require_once 'Config.php';
include_once 'helpers.php';
require_once 'aula_04.php';
echo '<br>';
echo falar('valores');
echo '<br>';
echo resumirTexto('texto simples',10,'sim continue');
echo somar(5, 700, 20);
exit();




?>