<?php
require_once ('includes/header.php')
?>

<main class ="container mt-5">
    <div class="card card-header mb-5">
        <h2>Proposer un Stage une Alternance</h2>
    </div>
    <div class="container">
        <div class="card card-header pt-4 pb-4 pl-5">
            <form method="post" action="add_internships.php" class="card card-header">

                <label for="internship_name">Nom de l'entreprise</label>
                <input type="text" name="internship_name" id="internship_name">

                <label for="content">Contenu</label>
                <input type="text" name="content" id="content">

                <label for="internship_categorie_id">Choix de la categorie du stage :</label>
                <select name="internship_categorie_id" id="internship_categorie_id">
                    <option value="1">block-release training</option>
                    <option value="2">internship</option>
                    <option value="3">webdesign</option>
                    <option value="4">php</option>
                    <option value="5">html</option>
                    <option value="6">css</option>
                    <option value="7">java</option>
                    <option value="8">wordpress</option>
                    <option value="9">marketing</option>
                    <option value="10">social media</option>
                    <option value="11">community manager</option>
                </select>

                <button type="submit" class="btn btn-outline-success mt-3">Ajouter une entreprise</button>
            </form>
        </div>
    </div>
</main>
<?php
if(!empty($errors)){
    echo '<div class = "errors">';
    echo implode('<br>', $errors);
    echo '</div>';
    header("Location: index.php");
    exit();
}

?>
<?php
require_once ('includes/footer.php')
?>
