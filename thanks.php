<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you !</title>
</head>
<body>
    <?php echo "Merci ".$_SESSION['user_lastname']." ".$_SESSION['firstname']." de nous avoir contacté à propos de ".$_SESSION['user_subject'].".".'<br>';?>
    <?php echo "Un de nos conseillers vous contactera soit à l'adresse ".$_SESSION['user_email'].'<br>'.
    "ou par téléphone au ".$_SESSION['user_number']." dans les plus brefs délais pour traiter votre demande :".'<br>';?>
    <?php echo $_SESSION['user_message']; ?>
</body>
</html>