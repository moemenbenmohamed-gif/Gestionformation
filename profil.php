<?php
$nom = "ben mohamed";
$prenom = "Moemen";
$email = "moemen.benmoahemd@email.com";
$age = 20;
$ville= "nabeul";
$formation="developement web ";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Profil utilisateur</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body >
<h1>Profil utilisateur</h1>
<p><strong>Nom :</strong> <?= $nom ?></p>
<p><strong>Prénom :</strong> <?= $prenom ?></p>
<p><strong>Email :</strong> <?= $email ?></p>
<p><strong>Date : </strong><?= date("H:i:s") ?></p>
<p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
<p><strong>ville :</strong> <?= $ville ?></p>
<p><strong>$formation :</strong> <?= $formation ?></p>
<?php echo "<p>Bienvenue $prenom  dans la formation $formation.</p>";?>
</body>
</html>