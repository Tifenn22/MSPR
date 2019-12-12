<?php
session_start();
?>

<?php
require_once ('db.php');
?>

<?php
if (!empty($_POST)){

    $last_name = filter_input(INPUT_POST, "last_name");
    $first_name = filter_input(INPUT_POST, "first_name");
    $email = filter_input(INPUT_POST, "email");
    $phone_number = filter_input(INPUT_POST, "phone_number");
    $password = filter_input(INPUT_POST, "password");

    $sql = "INSERT INTO users ( first_name , last_name , email , phone_number , password )
             VALUES (:first_name, :last_name, :email, :phone_number, :password)";

    $stmt = $connexion -> prepare ($sql);
    $stmt -> execute ([
        ":last_name" => $last_name,
        ":first_name" => $first_name,
        ":email" => $email,
        ":phone_number" => $phone_number,
        ":password" => $password,
    ]);

    $_SESSION["id"] = $connexion -> lastInsertId();
    $_SESSION["last_name"] = $last_name;
    $_SESSION["first_name"] = $first_name;
    $_SESSION["email"] = $email;
    $_SESSION["phone_number"] = $phone_number;
    $_SESSION["isAdmin"] = 0;
    $_SESSION["User"] = 1;

    header("Location: connect.php");
    exit();
}
?>