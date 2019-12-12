<?php
require_once ('db.php');
?>

<?php

$id = $_GET['id'];

$sql = "DELETE FROM internship
        WHERE id = :id";

$stmt = $connexion ->prepare($sql);

$stmt -> execute([":id" => $id]);

header("Location: internships.php");

?>