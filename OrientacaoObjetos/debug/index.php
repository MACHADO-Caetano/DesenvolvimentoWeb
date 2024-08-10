<?php
require __DIR__ . '/../vendor/autoload.php';

use Usuario\OrientacaoObjetos\ContaBancaria;

$contaBanco = new ContaBancaria();
$contaBanco->Hello();