<?php
ini_set("display_errors", TRUE);
error_reporting(E_ALL);
include_once("tiny.class.php");

$tpl = new TinyTpl("main.php.tpl");
$tpl->assign('name', 'Frank');

$aArray = array(
	'firstname' => "Frank",
	'lastname'  => "Vlatten",
);

$tpl->assign($aArray);

$aNamen = array(
	array('firstname' => 'Frank', 'lastname' => 'Vlatten'),
	array('firstname' => 'Markus', 'lastname' => 'Vlatten'),
	array('firstname' => 'Oliver', 'lastname' => 'Vlatten'),
);

$tpl->assign('namen', $aNamen);
$tpl->assign('bVarJa', true);
$tpl->assign('bVarNein', false);

$tpl->parse();
