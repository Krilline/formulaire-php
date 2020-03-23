<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <form  method="POST" action="thanks.php">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name" required>
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email" required>
        </div>
        <div>
            <label  for="courriel">Numéro de téléphone :</label>
            <input  type="tel"  id="numero"  name="user_number" required>
        </div>
        <div>
        <label for="subject-select">Choisissez un sujet:</label>
            <select name="user_subject" id="subject-select" required>
                <option value=""></option>
                <option value="remboursement">Remboursement</option>
                <option value="demande">Demande</option>
                <option value="question">Question</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message" required></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>