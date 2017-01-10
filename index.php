<?php include("fonction.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="CRESSOT">
    <title>Repertoire mathieuc.FTP</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/main.js">
    <link rel="stylesheet" href="js/jquery-3.1.1.slim.min.js">
    <script type="text/javascript" src="index.php"></script>

</head>

<header id="header">
    <h1 id="h1">Répertoire mathieuc.FTP</h1>
</header>

<body id="php">



<?php foreach ($dirs as $dir) { ?>
    <?php if (is_dir($base_url.$dir)) {?>
        <p id="doss">dossier :<a href="<?=$dir?>"><?php echo $dir?></a> </p>
    <?php } else {?>
        <p id="fch">fichier :<a href="<?=$dir?>"><?=$dir?></a> </p>
    <?php }?>
<?php }?>

</body>

<footer id="footer">
<h2 id="h2">Home</h2>
</footer>
</html>
