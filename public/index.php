<?php
require_once "../bootstrap.php";



/* OOP */
/* LateStaticBinding */
use PhpCertificate\OOP\LateStaticBinding\B;
dd(B::selfTest());
dd(B::staticTest());