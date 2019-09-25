<?php
    function start_page($title){
    echo'<!DOCTYPE html><html lang="fr"><head><title>'.PHP_EOL.$title.'</title></head><body>'.PHP_EOL;
    };

    function end_page(){
        echo '</body></html>';
    }
    start_page('Test');
    echo '<hr/><br/><strong>Test</strong><br/><hr/>';
    end_page();