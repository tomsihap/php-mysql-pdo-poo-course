# PHP - Les conditions
## Exercice 1
Créer une variable **age** et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.

## Exercice 2
Créer une variable **isEasy** de type booléan et l'initialiser avec une valeur.
Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.
**Bonus :** L'écrire de deux manières différentes.

## Exercice 3
Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :
- Homme
- Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**

Gérer tous les cas.

## Exercice 4
L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable **magnitude**. Selon la valeur de **magnitude**, afficher la phrase correspondante.

Magnitude   |   Phrase
------      |    ---
1           |   Micro-séisme impossible à ressentir.
2           |   Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3           |   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4           |   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5           |   Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
6           |   Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
7           |   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8           |   Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9           |   Séisme capable de tout détruire sur une très vaste zone.

Gérer tous les cas.
*Utilser autre chose que des if else*

## Exercice 5
Traduire ce code avec des if et des else :


    <?php
      echo ($type == 'fire') ? 'Vous avez choisi Salamèche.' : 'Vous avez choisi Bulbizarre ou Carapuce !';
    ?>

## Exercice 6
Traduire ce code avec des if et des else :


    <?php
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>
## Exercice 7
Traduire ce code avec des if et des else :


    <?php
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>
## Exercice 8
Traduire ce code avec des if et des else :


    <?php
      echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
    ?>
