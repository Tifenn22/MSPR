<?php
require_once ('../PHP/header.php')
?>
<?php
$id= $_GET["id"];
$sql = "SELECT *
        FROM internship
        WHERE id = :id";
$stmt = $connexion -> prepare($sql);
$stmt -> execute([":id"=>$id]);
$update_internship = $stmt->fetch();

if (!empty($_POST)){

    $Nom = $_POST['Nom'];
    $Prix = $_POST['Prix'];
    $Categorie_id = $_POST['Categorie_id'];
    $Description = $_POST['Description'];

    $sql = "UPDATE produits
             SET internship_name = :internship_name,
                 content = :content,
                 internship_categorie_id = :internship_categorie_id,
                 WHERE id = :id";

    $stmt = $connexion -> prepare ($sql);
    $stmt -> execute ([
        ":internship_name" => $internship_name,
        ":content" => $content,
        ":internship_categorie_id" => $internship_categorie_id,
    ]);

    header ("Location: detail.php?id=".$id);
    exit();
}

?>

<main class = maindetail>
    <form method="post" action="update.php">

        <h2>Modifier le stage</h2>

        <label for="internship_name">Nom :</label>
        <input type="text" name="internship_name" id="internship_name" value = "<?php echo $update_internship["internship_name"] ?>">

        <label for="content">Prix :</label>
        <input type="varchar" name="content" id="content" value = "<?php echo $update_internship["content"] ?>">

        <label for="Nom">Choix de la categorie :</label>
        <select name="categorie_id" id="Catehorie_id" value = "<?php echo $update_internship["internship_categorie_id"] ?>">
            <option value="1">Chien</option>
            <option value="2">Chats</option>
            <option value="3">Reptiles</option>
            <option value="4">Cheval</option>
            <option value="5">Oiseaux</option>
            <option value="6">Rongeurs</option>
            <option value="7">Poissons</option>
        </select>

        <?php
        if(!empty($errors)){
            echo '<div class = "errors">';
            echo implode('<br>', $errors);
            echo '</div>'; }

        ?>

        <button class="OK" type="submit">Modifier le produit</button>

    </form>
</main>

<?php
require_once ('../PHP/footer.php')
?>
