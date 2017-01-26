<?php
require_once "../bootstrap.php";

use PhpCertificate\OOP\MagicMethods;

$magicm = new MagicMethods();
dd($magicm->teste = 1);
