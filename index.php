<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
    <h1>Inititation à PHP</h1>
    <?php
    //Variables : informations stockées temporairement? Elles ne sont valables que sur la paga en question.
    //Afficher le nom le prénom et l'age d'une personne.
    // $variable = valeur
    $nom = 'Dupont';//chaine de caractères (string)
    $prenom = ' Pierre';
    $age=15;// nombre (int)
    $date_jour = date('d/m/Y');


    //Instruction d'affichage
    // Mon nom est $nom $prenom et j'ai $age ans.
    echo $nom;

    echo '<h1>mon nom est'.' '.$nom.' '.$prenom.' '.$age.' ans</h1>';
    //je m'appelle => echapper le caractère
    // Le . = +  on ajoute un poitn derrière les variables $ quand il y a en suivant une chaine de caractères.
    // = ou == affecte une valeur, on défini une valeur
    echo 'Je m\'appelle' .$nom.'<br>';
   

    // afficher sur le site : aujourd'hui c'est l'été
    echo 'aujourd\'hui, c\'est l\'été !<br>Nous sommes le '.$date_jour.'<br>';

    //Opérations
    $taux_horaire = 10;
    $nbre_heure = 600;
    $resultat1 = 10 * 600;
    $resultat2 = ((50*3)+(25/0.003)*3000)/36;
    $resultat3 = $taux_horaire*$nbre_heure;
    echo $resultat1.'<br>';
    echo $resultat2.'<br>';
    echo $resultat3.'<br>';

    // Les conditions
    // Si Dupont a 18 ans, il pourra voter et accéder au formulaire
    // Dupont = 18 => Vrai (true) => BOOLEEN (vrai ou faux)
    // S'il n'a pas 18 ans il ne pourra ^pas voter ni accéder au formulaire => faux (false)
    // Si dupont est plus grand ou egal à 18 => il accède à la page
    // > + grand  /  <moins grand / == égale
    // if = si
    // else = sinon
    // else if = sinon si
    if($age>=18){
        //instructions
        echo 'Bravo, tu peux voter !';
    }

    else if($age<=16){
        echo 'Tu es encore trop jeune !';
    }

    else {
        // instructions dans le cas ou la réponse est false
        echo 'Attends un peu, tu pourras un jour voter !';
    }

    

    // Les fonctions
    // Une suite d'instructions à réaliser
    // Quand on veut se connecter sur un site , on vérifie le pseudo ( on se connecte) et on affiche un message de bienvenue.

    function bienvenue(){
        // on récupère les informations dans le BDD ( dans les variables)
        $pseudo = "stephanie";
        // on affiche un message
        // !$pseudo => == false
        // if($pseudo) => $pseudo==true
        if($pseudo){
            echo 'Bienvenue'.$pseudo;
        }
        else echo 'merci de vous identifier';

        }

        //Affichage de la function
        echo bienvenue();


        // Les boucles


        // Les tableaux => Listes avec des clés
        // array
        // Nom = (tous les noms)/ prenom= (tous les prenoms)/ age=(tous les gaes) / ID
        // 20 lignes (20 personnes)= chaque ligne aura un identifiant unique
        // EX: 1 / dupont / pierre / 30
        //     2 / laffont / marie / 25
        //     3 / dupont / Florent / 27



        // Création d'un blog en PHP
        $articles = [];







    ?>


</body>
</html>