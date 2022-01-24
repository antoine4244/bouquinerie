<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Target PHP</title>
</head>
<body>

<?php

var_dump($_POST);

?>

<p>Bonjour
<?php

echo $_POST["prenom"];
?>
, fais comme chez toi !
</p>
<p>Tu ne t'appelles pas
    <?php
    echo $_POST["prenom"];
    ?>
    ? J'ai dû mal comprendre...
</p>

<p>Clique <a href="contact.php">ici</a> pour retaper ton prénom</p>
    
</body>
</html>

