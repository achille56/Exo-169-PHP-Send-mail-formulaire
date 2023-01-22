<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Formulaire à remplir</h1>
        <form action="form.php" method="post">
            <label for="email"></label>
            <input type="email" name="user-email" id="email" placeholder="Entrer votre email ici" required>

            <label for="message"></label>
            <textarea id="message" name="user-message"  cols="20" rows="10" maxlength="500" required></textarea>

            <button type="submit" name="user-submit">Envoyer</button>
        </form>
</body>

</html>
