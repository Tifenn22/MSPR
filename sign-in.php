<?php
require_once ('includes/header.php')
?>

<main class="container text-center">

    <form method="post" action="connect.php">
        <div class="mt-5 mb-5">
            <h2 class="">Se connecter</h2>
        </div>
        <div class="mr-1 mb-4">
            <label for="email">Mail :</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="mr-5 mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>

        <h2 id="h2" hidden class="text-danger mb-4 pb-3">Veuillez correctement remplir les champs</h2>

        <?php
        if(!empty($errors)){
            echo '<div class = "errors">';
            echo implode('<br>', $errors);
            echo '</div>'; }

        ?>

        <button type="submit" class="OK">Connexion</button>

    </form>
</main>

<?php
require_once ('includes/footer.php')
?>
