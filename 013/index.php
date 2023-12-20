<?php
session_start();

$_SESSION['mano_sesija'] = 'skanus sesijas';
$_SESSION['logged'] = 'yes sesijas';

$_SESSION['log_time'] = time();


setCookie('mano_saldainis', 'skanus') ;//sesijinis nezinomas laikas
setCookie('mano_saldainis2', 'dar skanesnis', time() + 3600) ; // skirtingu pavadinimu turi buti; nurodytas galiojimo laikas sekundem
//jei norim istrinti cookies, setinam neigiama laika