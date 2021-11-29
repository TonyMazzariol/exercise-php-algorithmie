<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /* Exo 1

    Demander a l'utilisateur un nombre
    Tante que le nomnbre est > 3 et < 1 
        redemande un nombre
    Sinon 
        ecrire Bravo    
        
        $answer = readline('Rentrez un nombre entre 1 et 3 :');
        while ($answer > 3 || $answer < 1) {
            $answer = readline('Veuillez rentrer un nombre entre 1 et 3 :');
        }
        echo('Bravo')
        */

    /*Exo 2

    Demander un nombre compris entre 10 et 20
    Tantque nombre > 20 et < 10
        Si nombre > 20
            ecrire Plus petit !
        Sinon 
            ecrire Plus grand !
    Sorti
    ecrire Bravo                
    */


    /* Eco 3
    Demander un nombre
        Pour valeur i = 0 jusqua i = 10 Faire
            ecrire nombre + i
            i++
            $answer = readline('un nombre :'); 
            for ($i = 1 ; $i <= 10 ; $i++) {
                echo($answer + $i );
                echo("\n");
            }
    */

    /* 
    Exo 4
    
    Same 
    */

    /* 
    Exo 5
    
    Demande un nombre
        Pour i = 1 jusqua i = 10 Faire 
            nmbre * i
            i++
            $nbr = readline('Donnez moi un nombre et je vous rendrais sa table de multiplication :');
            for ($i=1; $i<=10; $i++) {
                echo($nbr * $i);
                echo("\n");
            } 
    */



    /* 
    Exo 6 
    variable a = 0

    Pour i=0 i<tableau1 longueur i++ Faire 
        variable a = tab1 i + a     
    ecrire  a
    $tab = array(55,24,43,98,120,26);
    $a = 0;
    
    
    for ($i=0; $i < count($tab) ; $i++) {
        $a = $a + $tab[$i];
    }
    echo($a);
    */

    /* 
    Exo 7 
    i = 0
    tab = []
    Tanque i < 20 Faire
        demande un nombre 
        ajouter tab { i , nombre}
    
        a = 0

    Pour i = 0 i < tab longueur i++ FAire
        Si tab i > a Alors  
            tab i = a
    ecrire a
    */
    $tab = [];
    for ($i=0; $i<5; $i++){
        $a = readline('Veuillez rentrer un nombre (20 au total) :');
        $tab[] = $a;
    }
    print_r($tab);
    $b = 0;
    for ($i=0; $i<count($tab); $i++) {
        if ($tab[$i] > $b) {
            $b = $tab[$i];
        }
    }
    $c = array_keys($b);
    var_dump($c);
    echo("le nombre le plus grand est $b et il s'agissait du $c nombre.")

    /* 
        Exo  8
    
    objet = {}
    Tanque i = Oui Faire
        demande un nombre 
        ajouter tab { i , nombre}
        i = fini??

        a = 0

    Pour i = 0 i < tab longueur i++ FAire
        Si tab i > a Alors  
            tab i = a
    
    ecrire a
    */

    /* 
    Exo 9

    tab 10e 40e 55e ...
    a = 0

    Pour i .... Faire
        a = a + tab i 
    ecrire a (Somme)
    
    lire argent donner

    Si argent < a Faire 
        ecrire ce n'est pas assz 
    Sinon 
        b = argent - somme
        
        c = b arondi au 5 en endessous
        b - c = nombre piece 1euro

        ...
    */

    ?>
</body>
</html>