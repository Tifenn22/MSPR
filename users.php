<?php
require_once ('includes/header.php')
?>
<main class="mainaccueil">
    <section id="home" class="container mt-5">
        <div class="jumbotron">
            <h1>Utilisateurs :</h1>
        </div>
        <div class="container">
            <div class="card card-header">
                <div class="card-body">
                    <?php
                    $sql = "SELECT *
        FROM users
        ORDER BY last_name ASC ";
                    $stmt = $connexion -> prepare($sql);
                    $stmt -> execute();
                    $utilisateur = $stmt->fetchAll();
                    foreach ($utilisateur as $Client) {
                        ?>
                        <a href="user.php?id=<?php echo $Client ['id']; ?>">
                            <span><?php echo $Client ['last_name']; ?></span></a><br><br>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once ('includes/footer.php')
?>
