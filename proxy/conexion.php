<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=c1560393_ba2', 'c1560393_uxruel4', 'Cl35UGsm39Hjs');
    
} catch (PDOException $e) {
    print "Error!!: " . $e->getMessage() . "<br/>";
    die();
}



?>