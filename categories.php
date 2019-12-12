<?php
require_once ('includes/header.php')
?>
    <main class="mainaccueil">
        <section id="home" class="container mt-5">
            <div class="jumbotron">
                <h1>Categories :</h1>
            </div>
            <div class="container">
                <div class="card card-header">
                    <div class="card-body">
                        <?php
                        $sql = "SELECT * FROM internship_categories ORDER BY categories ASC ";
                        $stmt = $connexion -> prepare($sql);
                        $stmt -> execute();
                        $categories = $stmt->fetchAll();
                        foreach ($categories as $categorie) {
                            ?>
                            <a href="categorie.php?id=<?php echo $categorie ['iddeouff']; ?>">
                                <span><?php echo $categorie ['categories']; ?></span></a><br><br>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
require_once ('includes/footer.php')
?>