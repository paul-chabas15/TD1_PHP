<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];
    $result = $op1 * $op2;
    function start_page($result){
        echo '<!DOCTYPE html><html lang="fr"><head><title>',$result,'</title></head><body>';
    }

    function end_page(){
        echo '</body></html>';
    }

    start_page();
    echo $result;