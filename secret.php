<?php require "./includes/header.php";

// EXERCICE 2 - Envoie de données vers une autre page

// Je process les infos de mon formulaire en tout début de page. De cette façon je peux gérer l'affichage à l'aide de variables

if(!empty($_POST['username']) && !empty($_POST['password']))
{
        // BONUS : Je me sers de variables afin d'assainir mes inputs. Les fonctions htmlspecialchars et striptags servent à cela. htmlspecialchars suffit pour le XSS mais avec striptags on enlève aussi les balises HTML & PHP (donc sans on peut "taper du code").
        
        // Condition MAJEURE 1 : mon formulaire est valide
        $username = htmlspecialchars(strip_tags($_POST['username']));
        $password = htmlspecialchars(strip_tags($_POST['password']));
        
        if($username === "axel" && $password === "test"){
            // Condition n°1 : mes identifiants sont valides
            
            $msg = "Authentification réussie !";
            $alert = "success";

            // EXERCICE 3 : SESSION
            $_SESSION['user'] = $username;

        }elseif($username === "axel" && $password !== "test"){
            // Condition n°2 : mon mot de passe seul est invalide
            
            $msg = "Mot de passe erroné";
            $alert = "warning";
            unset($username,$password);
        }elseif($password === "test" && $username !== "axel" ){
            // Condition n°3 : mon nom d'utilisateur seul est invalide
            
            $msg = "Nom d'utilisateur erroné";
            $alert = "warning";
            unset($username,$password);
        }elseif($password !== "test" && $username !== "axel"){
            // Condition n°4 : les deux sont invalides
            
            $msg = "Les deux champs sont erronés";
            $alert = "warning";
            unset($username,$password);
        }
}else{
    // Les champs sont vides
    $msg = "Les champs n'ont pas été remplis";
    $alert = "danger";
    unset($username,$password);
}
?>

<main class="px-3">
    <?php
    // Je crée un affichage conditionnel à l'aide de variables, de cette façon je n'ai pas besoin de recopier tous les cas de figures une seconde fois
        if(isset($msg) && isset($alert)) {
            echo "<p>${msg}</p>";
            echo "<a href='correction.php' class='btn text-white btn-${alert}'>Réessayer</a><br/>";

            if(isset($username)) echo "Bienvenue $username !";
        }
    ?>

</main>
<?php require "./includes/footer.php"; ?>