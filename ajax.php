<?php $base_url = "/home/mathieuc/";
if (isset($_GET['dossier'])) {
    $base_url = $base_url.$_GET['dossier'];
}
$dirs = scandir($base_url);?>


<?php foreach($dirs as $dir):?>

    <?php if (is_dir($base_url.$dir)){?>

        <?php if ($dir == "..") {?>

            <div class="bod">
                <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><img src="img/ret.png" alt="fichier"></a>
                <a class="doc" href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?></a><br>

            </div>

        <?php } if( $dir != '.' && $dir != '..') { ?>

            <div class="bod">

                <!-----------------------------------------------------dossier---------------------------------------------------------------->

                <?php if (isset($_GET['dossier'])) {?>
                    <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><img src="img/dossimg.png" alt="dossier"></a>
                    <a class="doc" href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?>
                    </a><br>

                <?php } else {?>

                    <a href="index.php?dossier=<?=$dir?>/"><img src="img/dossimg.png" alt="fichier"></a>
                    <a class="doc" href="index.php?dossier=<?=$dir?>/"><?=$dir?>
                    </a><br>

                <?php }?>

            </div>

        <?php }?>

    <?php } else {?>
        <!--******************************-->


        <!---------------------------------------------------fill------------------------------------------------------------------>

        <div>

            <p><img src="img/fichimg.png" alt="fichier">
                <a class="doc" href="index.php?dossier=<?=$dir?>/"><?=$dir?>

                    <!--------------------------------------------------------download------------------------------------------------------------>

                    <a class="down" download='<?=$dir?>' href= http://mathieuc.marmier.codeur.online/<?=$_GET["dossier"].$dir?>>Télécharger <?=$dir;?></a></p>

            <!--*******************************-->




        </div>

    <?php }?>

<?php endforeach;?>

<!--<script src="js/main.js"></script>-->
