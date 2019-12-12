<?php
require_once ('includes/header.php')
?>

<main class ="container mt-5">
    <form method="post" action="register.php">
        <div class="card-header mb-5">
            <h2>S'inscrire</h2>
        </div>

            <form method="post" action="connect.php" class="card card-body">

                <label for="last_name">Nom</label>
                <input type="text" name="last_name" id="last_name">

                <label for="first_name">Prenom</label>
                <input type="text" name="first_name" id="first_name">

                <label for="email">Email</label>
                <input type="text" name="email" id="email">

                <label for="phone_number">Numero de tel</label>
                <input type="text" name="phone_number" id="phone_number">

                <label for="password">Mot de passe</label>
                <input class="mb-4" type="password" name="password" id="password">

                <?php
                if(!empty($errors)){
                    echo '<div class = "errors">';
                    echo implode('<br>', $errors);
                    echo '</div>';
                    header("Location: Connexion.php");
                    exit();
                }

                ?>

                <button type="submit" class="OK">Créer mon compte !</button>
            </form>
    </form>
</main>

<?php
require_once ('includes/footer.php')
?>
