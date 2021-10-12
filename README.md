# Pass Intro


# Exercice 1 : Templating conditionnel

Le templating conditionnel repose sur deux choses : 
    - Des templates à afficher
    - Des conditions pour afficher ces templates

Par conséquent on va généralement d'abord créer notre template et ensuite poser les conditions à remplir, et placer le templates dans un if-else.

Pour l'exercice, la difficulté réside dans le fait de ne pas oublier les bases comme les infos nécessaires pour l'envoi de formulaire :

- balise form methode post
- input avec des name
- input/button type submit
- créer des conditions suivant le modèle : est-ce que ça existe ? est-ce que c'est valide ? a-ton besoin de renseigner sur la progression ?

# Exercice 2 : Envoi des infos sur une autre page.

On va utiliser l'action du formulaire pour rediriger notre envoi de formulaire vers une autre page.
Nous pourrons ensuite récupérer ces informations directement sur l'autre (secret.php).

La logique générale veut qu'on lance le script PHP en premier lieu, c'est ce que l'on va faire.

On va apprendre à assainir des inputs à l'aide des fonctions htmlspecialchars et striptags. Ces fonction permettent d'éviter les failles XSS (X comme une croix donc Cross Site Scripting) et donc d'exécuter du script involontairement.
On réassigne les inputs à des variables assainies.

On va aussi utiliser des variables pour l'affichage de notre page afin de factoriser les retours d'affichage. Tous les retours d'affichage se font au même endroit, cela permet d'avoir un template unique pour toutes les réponses.

Il faudra ensuite rédiger des conditions qui prennent en compte tous les cas sachant que le nombre de cas totaux est : Nombre de cas A * Nombre de cas B = Nombre de cas totaux.
Ici on peut avoir un username vide, rempli et erroné, ou rempli et juste. Même chose pour le password. 
Toutefois, il conviendra de séparer les cas où ils sont vides car il est inutile de vérifier les inputs si au moins l'un est vide.

Je change les liens de la navbar vers des liens valides comme la page d'accueil est index.php.

# Exercice 3 : Sauvegarder les infos en session

Une session est un stockage d'informations au niveau local.
Il passe par l'initialisation de la session dans un fichier à part (ce n'est pas obligatoire qu'il soit dans un fichier à part, par bonne mesure on sépare la session du reste) avec la fonction session_start(). (fichier logique.php dans le dossier includes)
Ensuite on peut initialiser la session en assignant à la superglobales $_SESSION une valeur. (attention la session ne peut pas stocker autre choses que des strings et des numbers).
Nous initialiserons la session lors que l'authentification est valide.
La particularité de la session est qu'elle existe tant qu'on ne l'a pas supprimée.
Pour l'utiliser c'est la même chose que les $_POST
