<?php
require_once ('includes/header.php')
?>

<?php
$id = $_GET["id"];
$sql = "SELECT *
        FROM internship
        INNER JOIN internship_categories ON internship.internship_categorie_id = internship_categories.iddeouff WHERE internship_categorie_id = :id LIMIT 3";
$stmt = $connexion -> prepare($sql);
$stmt -> execute([":id"=>$id]);
$internships = $stmt->fetchAll();

if ($internships["iddeouff" !== "internship_categorie_id"]){

    foreach ($internships as $internship) {

        ?>
        <main class="mainaccueil">
            <section id="home" class="container mt-5">
                <div class="jumbotron">
                    <h1><?php echo $internship ['internship_name']; ?></h1>
                </div>
                <div class="container">
                    <div class="card card-header pt-4 pb-4 pl-5">

                        <div class="mt-3">Nom : <?php echo $internship ['internship_name']; ?></div>

                        <div class="mt-3">Prenom : <?php echo $internship ['content']; ?></div>

                        <div class="mt-3">Mail : <?php echo $internship ['created_at']; ?></div>

                        <div class="mt-3">Tel : <?php echo $internship ['categories']; ?></div>

                        <div class= "container row">

                            <div class="container mt-5">
                                <div class="form-inline">
                                    <a class= "btn btn-outline-success mr-3" href="delete_internship.php?id=<?php echo $internship['id']?>">Je supprime ce stage</a>

                                    <a class= "btn btn-outline-success" href="update_internship.php?id=<?php echo $internship['id']; ?>">Je modifie ce stage</a>
                                </div>
                            </div>
                        </div>
            </section>
        </main>
    <?php } ?>
<?php } else { ?>

    <main class="mainaccueil">
    <section id="home" class="container mt-5">
    <div class="jumbotron text-center">
        <h1>Cette categorie est vide </h1>
    </div>
    <div class="container">
    <div class="card card-header pt-4 pb-4 pl-5">

    <a class="btn btn-outline-success btn-lg" href="index.php">Revenir au categories</a>

<?php } ?>

<?php
require_once ('includes/footer.php')
?>