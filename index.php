<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 4</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 4</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
                    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
                    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
                    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
                </div>
                <?php

                //déclaration de la fonction
                function number($Number1, $Number2) {
                    if ($Number1 > $Number2) {
                        return 'Le premier chiffre est plus grand';
                    } elseif ($Number1 < $Number2) {
                        return 'Le premier chiffre est plus petit';
                    } else {
                        return 'Les chiffres sont identiques';
                    }
                }
                //Déclaration des deux chiffres
                $nb1 = 14;
                $nb2 = 18;
                echo number($nb1, $nb2);
                ?>
            </div>
        </div>
    </div>
</body>
</html>

