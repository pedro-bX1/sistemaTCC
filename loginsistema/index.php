<?php


include("config/config.php");
include(DIRREQ."lib/vendor/autoload.php");

use Traits\TraitParseUrl;

class ClassTest{
    use TraitParseUrl;
    public function __construct(){
        var_dump($this->parseUrl());
    }
}
$teste= new ClassTest();


?>