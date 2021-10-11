<?php require "./includes/header.php"; ?>

    <!-- EXERCICE 1 - Templating conditionnel -->
	<main class="px-3">
        <!-- Condition n°1 : mon formulaire a été utilisé -->
        <?php
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            // Condition n°2 : mon formulaire est valide
            if($_POST['username'] === "axel" && $_POST['password'] === "test"){
                ?>
                <h1>Bienvenue au Fort-pas-si-fort</h1>
                <p>Vous avez réussi la première épreuve</p>
                <?php
            }else{
            ?>
            <a href="correction.php" class="btn btn-warning text-white">Je retente ma chance</a>

            <?php
            }
        }else{
        ?>
            <h1>Access Website</h1>
            <!-- NE PAS OUBLIER LA BALISE FORM EN METHODE POST -->
            <!-- <form action="" method="post">         -->
            <form action="secret.php" method="post">        
                <div class="input-group mb-3">
                    <!-- Ajouter les names au inputs -->
                    <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username"
                    aria-describedby="button-addon1">
                </div>
                <div class="input-group mb-3">
                    <!-- Ajouter les names au inputs -->
                    <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password"
                    aria-describedby="button-addon2">
                    <!-- Rendre le button en type submit -->
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Login</button>
                </div>
            </form>
        <?php
        }
        ?>
	</main>
<?php require "./includes/footer.php"; ?>
