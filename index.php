<?php
require_once'pessoa.php';
require_once'pessoa2.php';
require_once'vendor/autoload.php';

$pessoa = new Projeto\Pessoa ('João', 35, '1.85');
$pessoa2 = new \Pessoa ('João', 35, '1.85');
$pessoa-> andar();
$pessoa2->andar();