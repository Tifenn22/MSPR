<?php
session_start();
?>

<?php
require_once ('db.php');
?>

<?php
if (!empty($_POST)){

    $name = filter_input(INPUT_POST, "name");
    $content = filter_input(INPUT_POST, "content");

    $sql = "INSERT INTO internship ( name , content )
             VALUES (:name, :content)";

    $stmt = $connexion -> prepare ($sql);
    $stmt -> execute ([
        ":name" => $name,
        ":content" => $content,
    ]);

    header("Location: connect.php");
    exit();
}
?>