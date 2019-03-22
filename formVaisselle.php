<?php
if ($_POST) {
    $errors = array();
    if (empty($_POST['name']))
    {
        $errors['name'] = "Vous devriez normalement avoir un nom";
    }
    if (empty($_POST['firstName']))
    {
        $errors['firstName1'] = "Vous devriez normalement avoir un prénom";
    }
    if (empty($_POST['email']))
    {
        $errors['email1'] = "Vous devriez normalement avoir une adresse mail";
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email2'] = "Votre adresse mail n'est pas valide";
    }

    if (empty($_POST['phone1']))
    {
        $errors['phone1'] = "Vous devriez normalement avoir un numéro de téléphone";
    }
    if (empty($_POST['subject1']))
    {
        $errors['subject1'] = "Vous devriez normalement préciser un sujet";
    }
    if (empty($_POST['message1']))
    {
        $errors['message'] = "Vous devriez normalement vouloir nous dire quelque chose";
    }


    if (count($errors) == 0) {
        header("Location : success.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form  action="" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="name" required>
        <p><?php if(isset($errors['name1'])) ?></p>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="firstName" required>
        <p><?php if(isset($errors['firstName1'])) ?></p>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
        <p><?php if(isset($errors['email1'])) ?></p>
        <p><?php if(isset($errors['email2'])) ?></p>
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
        <p><?php if(isset($errors['phone1'])) ?></p>
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="subject" required>
            <option value="">Choisissez un sujet</option>
            <option value="plumber">J'ai besoin d'un plombier pour ma tuyauterie</option>
            <option value="pizza">J'ai besoin d'un livreur de pizzas car j'ai faim</option>
        </select>
        <p><?php if(isset($errors['subject1'])) ?></p>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <p><?php if(isset($errors['message1'])) ?></p>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>

