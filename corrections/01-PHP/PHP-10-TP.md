# PHP - TP
**Pour tous les exercices, il faut soigner son CSS**
## TP-1
Faire une page pour enregistrer un futur apprenant.
On utilisera la liste de pays en JSON suivante : https://gist.githubusercontent.com/keeguon/2310008/raw/bdc2ce1c1e3f28f9cab5b4393c7549f38361be4e/countries.json

On devra pouvoir saisir les informations suivantes :
- Nom   (max 150 chars)
- Prénom    (max 50 chars)
- Date de naissance (format Y-m-d)
- Pays de naissance ()
- Nationalité (un des pays du json fourni)
- Adresse (max 255 chars)
- Email ( filter_var($email, FILTER_VALIDATE_EMAIL) )
- Téléphone (10 chiffres)
- Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) (choix valide)
- Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? (text)
- Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? (oui/non : radio button)
- Acceptez-vous de recevoir la newsletter ? (checkbox : vrai/faux)

A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire. Il n'y a pas besoin de les enregistrer en base de données !

## TP 2
Faire une page permettant de saisir les informations suivantes :
- Civilité (liste déroulante)
- Nom
- Prénom
- Age
- Société

A la validation, les données saisies devront aparaitre sous le formulaire. **Attention** les données devront rester dans les différents éléments du formulaire même après la validation.

## TP 3
Faire une fonction qui permet d'afficher les données des tableaux suivants :

```
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
```
Les afficher tous sur une même page.