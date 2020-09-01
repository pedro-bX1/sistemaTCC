<?php

#caminhos absolutos

$pastainterna="";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastainterna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    $barra="";
}else{
    $barra="/";
}
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastainterna}"); 

#ATALHOS

define('DIRIMG', DIRPAGE.'img/');
define('DIRCSS', DIRPAGE.'lib/css/');
define('DIRJS', DIRPAGE.'img/js/');

#acesso ao db

define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");
?>