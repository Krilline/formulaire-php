<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you !</title>
</head>
<body>
    <?php echo "Merci ".$_POST['user_lastname']." ".$_POST['user_firstname']." de nous avoir contacté à propos de ".$_POST['user_subject'].".".'<br>';?>
    <?php echo "Un de nos conseillers vous contactera soit à l'adresse ".$_POST['user_email'].'<br>'.
    "ou par téléphone au ".$_POST['user_number']." dans les plus brefs délais pour traiter votre demande :".'<br>';?>
    <?php echo $_POST['user_message']; ?>
</body>
</html>