<?php
    function start_page(){
        echo '<!DOCTYPE html><html lang="fr"><head><title>Calculatrice</title></head><body>';
    }

    function end_page(){
        echo '</body></html>';
    }

    start_page();
?>
    <form action="calcul.php" method="post" >
        <input type="text" name="op1">
        <input type="text" name="op2"><br/>
        <input checked="checked" type="radio" name="op" value="*"/>*<br/>
        <input type="radio" name="op" value="+">+<br/>
        <input type="radio" name="op" value="-">-<br/>
        <input type="radio" name="op" value="/">/<br/>
        <input type="submit" value="Calculer">
        <input type="reset" value="Effacer">
    </form>
<?php end_page(); ?>