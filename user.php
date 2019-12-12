<?php
require_once ('includes/header.php')
?>

<form>
    <ul>
        <?php
        $id= $_GET["id"];
        $sql = "SELECT *
        FROM users 
        WHERE id = :id";
        $stmt = $connexion -> prepare($sql);
        $stmt -> execute([":id"=>$id]);
        $users = $stmt->fetchAll();

        foreach ($users as $Client) {

        ?>
        <span>

                <?php if(!empty($Client["last_name"])){?>
                    <li><div>Nom : <?php echo $Client ['last_name']; ?></div></li>
                <?php } ?>

            <br><br>

            <?php if(!empty($Client["first_name"])){?>
                <li><div>Prenom : <?php echo $Client ['first_name']; ?></div></li>
            <?php } ?>

            <br><br>


            <?php if(!empty($Client["email"])){?>
                <li><div>Mail : <?php echo $Client ['email']; ?></div></li>
            <?php } ?>

            <br><br>

            <?php if(!empty($Client["phone_number"])){?>
                <li><div>Tel : <?php echo $Client ['phone_number']; ?></div></li>
            <?php } ?>

                    </span>

    </ul>
    <?php } ?>

</form>

<div class= "ladivdebatard">

    <?php if(isset($_SESSION["id"]) AND ($_SESSION["isAdmin"] == 1)) { ?>
        <a class= "BouttonA" href="../PHP/ModifierClient.php?id=<?php echo $Client['id']; ?>">Je modifie ce client</a>
    <?php } ?>

    <?php if(isset($_SESSION["id"]) AND ($_SESSION["isAdmin"] == 1)) { ?>
        <a class= "BouttonA" href="../PHP/DeleteClient.php?id=<?php echo $Client['id']?>">Je supprime ce client</a>
    <?php } ?>

</div>

<?php
require_once ('includes/footer.php')
?>