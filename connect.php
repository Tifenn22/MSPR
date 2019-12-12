<?php
session_start();

require_once ('db.php');

if (!empty($_POST)){

    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    $stmt = $connexion -> prepare ("SELECT * 
                from users
                where email = :email and password = :password");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt -> execute ();

    if($stmt->rowCount() == 1){

        $user = $stmt->fetch();

        $_SESSION["id"] = $user["id"];
        $_SESSION["first_name"] = $user["first_name"];
        $_SESSION["last_name"] = $user["last_name"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["phone_number"] = $user["phone_number"];
        $_SESSION["isAdmin"] = $user["Admin"] == 1;

        header("Location: index.php");
        exit();

    }

}

?>