<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>2</title>
</head>
<body>
    <a href="Mutualisation.php">Aller à Mutualisation</a>
    <a href="calculator.php">Aller à la calculatrice</a>
    <h1>2 Découverte du PHP</h1>
    <br>
    <?php
        echo'<strong>Voici mon premier programme PHP</strong><br/>'."\n";
        echo'C\'est pas mal non ? <br/>';
        $var1 = 6;
        $var2 = 1.3;
        $var3 = 'Variable3';
        echo 'var1 = 6, var2 = 1.3, var3 = Variable3 <br/>';
        echo "$var1 + $var2", ' echo "$var1 + $var2";<br/>';
        echo $var1 + $var2, ' echo $var1 + $var2 <br/>';
        echo $var1 + $var3, ' echo $var1 + $var3 <br/>';
    ?>
    <h1>4 Date</h1>
    <?php
        $journum = date('j/m/Y');
        $jour = date('F d, Y, h:i a');
        echo $journum,'<br>'.$jour;
    ?>
</body>
</html>
