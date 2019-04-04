# SQL - Partie 2 : Création de tables

**Attention : Toutes les commandes que vous taperez devront être conservées dans un fichier .sql**

## Exercice 1
Dans la base de données **webDevelopment**, créer la table **languages** avec les colonnes :
- **id** (type **INT**, auto-incrémenté, clé primaire)
- **language** (type **VARCHAR**)

## Exercice 2
Dans la base de données **webDevelopment**, créer la table **tools** avec les colonnes suivantes :
- **id** (type **INT**, auto-incrémenté, clé primaire)
- **tool** (type **VARCHAR**)

## Exercice 3
Dans la base de données **webDevelopment**, créer la table **frameworks** avec les colonnes suivantes :
- **id** (type **INT**, auto-incrémenté, clé primaire)
- **name** (type **VARCHAR**)

## Exercice 4
Dans la base de données **webDevelopment**, créer la table **libraries** avec les colonnes suivantes :
- **id** (type **INT**, auto-incrémenté, clé primaire)
- **library** (type **VARCHAR**)

## Exercice 5
Dans la base de données **webDevelopment**, créer la table **ide** avec les colonnes suivantes :
- **id** (type **INT**, auto-incrémenté, clé primaire)
- **ideName** (type **VARCHAR**)

## Exercice 6
Dans la base de données **webDevelopment**, créer, si elle n'existe pas, la table **frameworks** avec les colonnes suivantes :
- **id** (type **INT**, auto-incrémenté, clé primaire)
- **name** (type **VARCHAR**)

## Exercice 7
Supprimer la table **tools** si elle existe.

## Exercice 8
Supprimer la table **libraries**

## Exercice 9
Supprimer la table **ide**

## TP
Créer la base **codex**. Y créer une table **clients** qui aura comme colonnes :

| Colonnes          | Type    | Attributs                     |
|-------------------|---------|-------------------------------|
| id                | INT     | Auto-incrémenté, clé primaire |
| lastname          | VARCHAR |                               |
| firstname         | VARCHAR |                               |
| birthDate         | DATE    |                               |
| address            | VARCHAR |                               |
| firstPhoneNumber  | INT     |                               |
| secondPhoneNumber | INT     |                               |
| mail              | VARCHAR |                               |