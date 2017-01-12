<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repertoire mathieuc.FTP</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="js/main.js">
    <link rel="stylesheet" href="js/jquery-3.1.1.slim.min.js">
    <script type="text/javascript" src="index.php"></script>

</head>

<body id="body">
<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h1 id="h1">Répertoire mathieuc.FTP</h1>

            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-6">

            <?php foreach($dirs as $dir):?>

                <?php if (is_dir($base_url.$dir)){?>

                    <?php if ($dir == "..") {?>

                        <div class="bod">
                            <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><img src="img/ret.png" alt="fichier"></a>
                            <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?></a><br>

                        </div>

                    <?php } if( $dir != '.' && $dir != '..') { ?>

                        <div class="bod">

                            <!-----------------------------------------------------dossier---------------------------------------------------------------->

                            <?php if (isset($_GET['dossier'])) {?>
                                <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><img src="img/dossimg.png" alt="dossier"></a>
                                <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?>
                                </a><br>


                            <?php } else {?>

                                <a href="index.php?dossier=<?=$dir?>/"><img src="img/dossimg.png" alt="fichier"></a>
                                <a class="doc" href="index.php?dossier=<?=$dir?>/"><?=$dir?>
                                </a><br>

                            <?php }?>

                        </div>

                    <?php }?>

                <?php } else {?>

                    <!---------------------------------------------------fichier------------------------------------------------------------------>

                    <div>

                        <p><img src="img/fichimg.png" alt="fichier">
                            <a class="doc" href="index.php?dossier=<?=$dir?>/"><?=$dir?></p>

                        <a class="doc" download='<?=$dir?>' href= http://mathieuc.marmier.codeur.online/<?=$_GET["dossier"].$dir?>>Télécharger <?=$dir;?></a>
                    </div>

                <?php }?>

            <?php endforeach;?>

        </div>
    </div>
</div>


</body>

<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-6">
                <h2 id="h2">Home</h2>

                <a href="index.php"><img  id="home" src="img/home.png" alt="home"></a>

            </div>
        </div>
    </div>
</footer>

</html>
