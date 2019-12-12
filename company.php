<?php
require_once ('includes/header.php')
?>

    <form>
        <ul>
            <?php
            $id= $_GET["id"];
            $sql = "SELECT *
        FROM company
        WHERE id = :id";
            $stmt = $connexion -> prepare($sql);
            $stmt -> execute([":id"=>$id]);
            $companys = $stmt->fetchAll();

            foreach ($companys as $Company) {

            ?>
            <span>

                <?php if(!empty($Company["name"])){?>
                    <li><div>Nom : <?php echo $Company ['name']; ?></div></li>
                <?php } ?>

                <br><br>

                <?php if(!empty($Company["content"])){?>
                    <li><div>contenu : <?php echo $Company ['content']; ?></div></li>
                <?php } ?>

                <br><br>


                <?php if(!empty($Company["created_at"])){?>
                    <li><div>Photo : <?php echo $Company ['url_ thumbnail']; ?></div></li>
                <?php } ?>

                    </span>

        </ul>
        <?php } ?>

    </form>

    <div class= "ladivdebatard">

        <?php if(isset($_SESSION["id"]) AND ($_SESSION["isAdmin"] == 1)) { ?>
            <a class= "BouttonA" href=".php?id=<?php echo $Company['id']; ?>">Je modifie cette entreprise</a>
        <?php } ?>

        <?php if(isset($_SESSION["id"]) AND ($_SESSION["isAdmin"] == 1)) { ?>
            <a class= "BouttonA" href="../PHP/DeleteClient.php?id=<?php echo $Company['id']?>">Je supprime cette entrprise</a>
        <?php } ?>

    </div>

<?php
require_once ('includes/footer.php')
?>