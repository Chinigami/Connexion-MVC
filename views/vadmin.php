<!DOCTYPE html>
<html lang="fr">
<head>
    <title>mon premier mvc</title>
    <meta charset="utf-8" />
</head>
<body>
	<?php $nom = users($_POST['login'], $_POST['pw']); ?>
	<p>utilisateur	:<?php echo $nom['username'] ?> <a href="vlogin.php">deconnexion</a></p>
	<h1>on est sur la page de l'admin</h1>
</body>
</html>