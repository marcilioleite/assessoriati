<?php
$development = array(
	'host' => "localhost",
	'dbname' => 'testes',
	'user' => 'root',
	'passw' => 'xpil34'
);

$test = array(
	'host' => "localhost",
	'dbname' => 'testes',
	'user' => 'root',
	'passw' => 'xpil34'
);

$production = array(
	'host' => "localhost",
	'dbname' => 'testes',
	'user' => 'root',
	'passw' => 'xpil34'
);

$env = $development;

R::setup("mysql:host=".$env['host'].";dbname=".$env['dbname'], $env['user'], $env['passw']);