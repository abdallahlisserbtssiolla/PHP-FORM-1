<?php
session_start();
if (isset($_SESSION['nb_fois'])) {
 $_SESSION['nb_fois'] = $_SESSION['nb_fois']+1;
}
else {
 //initialisation de la session nb_fois
 $_SESSION['nb_fois'] = 0;
 //initialisation de la session dans un tableau multidimentionel
 $_SESSION['login']=[];
 $_SESSION['password']=[];
}
?>
<!DOCTYPE html>
<html lang="fr">
 <head>
 <title>Login</title>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 </head>
<body>
<h2>Veuillez saisir votre login et votre mot de passe</h2>
<form action="verif_login.php" method="POST">
login:<input type="text" name="login" /><br /><br />
mot de passe:<input type="text" name="password" /><br /><br />
<input type="submit" name="envoyer" value="valider"/>
<br /><br />
<?php
if (isset($_GET['message']) && $_GET['message'] == '1') {
 echo "<span style='color:#ff0000'>login incorrect</span>";
}
?>
<br /> 
Vous avez essayé <?php echo $_SESSION['nb_fois'];?> fois.
<br />
<?php
 
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {?>
	Les login et mot de passe essayés sont:
	<?php 
	//boucle sur tous les login en session
	for ($i=0;$i<count($_SESSION['login']);$i++) {
		echo $_SESSION['login'][$i]." et ".$_SESSION['password'][$i];
		//pour ne pas afficher le ; en dernier
		echo ($i==count($_SESSION['login'])-1)?"":", ";
	}
} ?>
</form>
</body>
</html>
