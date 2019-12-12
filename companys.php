<?php
require_once ('includes/header.php')
?>
<main class="mainaccueil">
    <section id="home" class="container mt-5">
        <div class="jumbotron">
            <h1>Entreprises :</h1>
        </div>
        <div class="container">
            <div class="card card-header">
                <div class="card-body">
                    <?php
                    $sql = "SELECT * FROM company ORDER BY name ASC ";
                    $stmt = $connexion -> prepare($sql);
                    $stmt -> execute();
                    $company = $stmt->fetchAll();
                    foreach ($company as $Company) {
                        ?>
                        <a href="company.php?id=<?php echo $Company ['id']; ?>">
                            <span><?php echo $Company ['name']; ?></span></a><br><br>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once ('includes/footer.php')
?>
