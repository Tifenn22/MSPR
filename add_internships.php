<?php
require_once ('db.php');
?>

<?php
if (!empty($_POST)){

    $internship_name = $_POST['internship_name'];
    $content = $_POST['content'];
    $internship_categorie_id = $_POST['internship_categorie_id'];

    $sql = "INSERT INTO internship (internship_name , content , internship_categorie_id ) VALUES (:internship_name, :content , :internship_categorie_id)";

    $stmt = $connexion -> prepare ($sql);
    $stmt -> execute ([
        ":internship_name" => $internship_name,
        ":content" => $content,
        ":internship_categorie_id" => $internship_categorie_id,

    ]);

    header ("Location: categorie.php?id=".$connexion -> lastInsertId());
    exit();
}
?>