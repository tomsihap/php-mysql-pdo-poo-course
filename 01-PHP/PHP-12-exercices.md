# PHP - Partie supplémentaire

## Exercice 1
Compléter le fichier fourni pour que la calculatrice fonctionne.
**Bonus :** Ajouter un bouton de remise à zéro.

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <form action="index.html" method="post">
      <input type="text" name="chiffre1" value="0"/>
      <input type="text" name="chiffre2" value="0"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
    </form>
    <p>Résultat : </p>
  </body>
</html>
```