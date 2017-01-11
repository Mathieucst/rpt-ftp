<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr">
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
                            <img src="img/ret.png" alt="fichier">
                            <a class="doc" href="index.php"><?=$dir?></a><br>

                        </div>

                    <?php } if( $dir != '.' && $dir != '..') { ?>

                        <div class="bod">

                            <!-----------------------------------------------------dossier---------------------------------------------------------------->

                            <?php if (isset($_GET['dossier'])) {?>
                                <img src="img/dossimg.png" alt="dossier">
                                <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?>
                                </a><br>



                            <?php } else {?>

                                <img src="img/dossimg.png" alt="fichier">
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
                <h2 id="h2"  href="index.php">Home</h2>

                <img  id="home" src="img/home.png" alt="home">
            </div>
        </div>
    </div>

</footer>

</html>
