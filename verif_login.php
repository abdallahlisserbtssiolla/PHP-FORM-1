<?php
session_start();
//ajout du login dans le tableau $_SESSION['login']
array_push($_SESSION['login'],$_POST['login']);
//ajout du password dans le tableau $_SESSION['password']
array_push($_SESSION['password'],$_POST['password']);
?>
<!DOCTYPE html>
<html lang="fr">
 <head>
 <title>Exercice login</title>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 </head>
<body>
<?php
if ($_POST['login'] == 'abdallah' && $_POST['password'] == 'lisser') {
 echo "<h2>login correct !</h2>";
}
else {
 header("location:login.php?message=1");
}
?>
</body>
</html>
