<?php


    //this script willm generate the sql dump file 
    require_once('Mysqldump.php');
    
    // create an object
    $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=project1', 'root', '');
    // checking is it working
    //print_r($dump);
    $dump->start('dump.sql');
    echo "finished";

    //print_r($email);
 
?>