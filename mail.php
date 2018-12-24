<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Envoi d'un email à GDP</title>
</head>
<body>


<?php
$retour = mail('cbvmmb@gmail.com','web-apps-gdp',$_POST['nom'],$_POST['prenom']$_POST['email']);
if($retour){
echo ?><script>alert('message envoyé');</script>';<?php
}

?>
</body>
</html>
