<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

    <?php
        if(isset($_POST) && isset($_POST['submit'])){
            if(empty($_POST['user_lastname'])){
                $error['user_lastname'] = "Le nom est obligatoire";
            }if(empty($_POST['user_firstname'])){
                $error['user_firstname'] = "Le prénom est obligatoire";
            }if(empty($_POST['user_email'])){
                $error['user_email'] = "L'email est obligatoire";
            }if(empty($_POST['user_number'])){
                $error['user_number'] = "Le numéro est obligatoire";
            }if(empty($_POST['user_subject'])){
                $error['user_subject'] = "Veuillez choisir un sujet";
            }if(empty($_POST['user_message'])){
                $error['user_message'] = "Le message est obligatoire";
            }if(!empty($_POST['user_lastname']) && !empty($_POST['user_email']) && !empty($_POST['user_number']) && !empty($_POST['user_subject']) && !empty($_POST['user_message']) && !empty($_POST['user_firstname'])){
                if(filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
                    $_SESSION['user_lastname'] = $_POST['user_lastname'];
                    $_SESSION['user_firstname'] = $_POST['user_firstname'];
                    $_SESSION['user_email'] = $_POST['user_email'];
                    $_SESSION['user_number'] = $_POST['user_number'];
                    $_SESSION['user_subject'] = $_POST['user_subject'];
                    $_SESSION['user_message'] = $_POST['user_message'];
                    Header('Location: http://localhost:3000/thanks.php');
                } else {
                    $error['user_email_format'] = "L'email n'est pas valide";
                }
             }
        }
    ?>

    <form  method="POST">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname">
            <p style="color: red"><?php if(isset($error['user_lastname'])) echo $error['user_lastname'];?></p>
        </div>
        <div>
            <label  for="nom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_firstname">
            <p style="color: red"><?php if(isset($error['user_firstname'])) echo $error['user_firstname'];?></p>
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="text"  id="courriel"  name="user_email">
            <p style="color: red"><?php if(isset($error['user_email'])) echo $error['user_email'];?></p>
            <p style="color: red"><?php if(isset($error['user_email_format'])) echo $error['user_email_format'];?></p>
        </div>
        <div>
            <label  for="courriel">Numéro de téléphone :</label>
            <input  type="tel"  id="numero"  name="user_number">
            <p style="color: red"><?php if(isset($error['user_number'])) echo $error['user_number'];?></p>
        </div>
        <div>
        <label for="subject-select">Choisissez un sujet:</label>
            <select name="user_subject" id="subject-select">
                <option value=""></option>
                <option value="remboursement">Remboursement</option>
                <option value="demande">Demande</option>
                <option value="question">Question</option>
            </select>
            <p style="color: red"><?php if(isset($error['user_subject'])) echo $error['user_subject'];?></p>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
            <p style="color: red"><?php if(isset($error['user_message'])) echo $error['user_message'];?></p>
        </div>
        <div  class="button">
            <button  type="submit" name="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>