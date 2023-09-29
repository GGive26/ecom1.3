<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire De PHP1</title>
</head>
<body>
    <h1>FORMULAIRE DE RECENSEMENT </h1>
    <p>Veuillez saisir vos informations dans ce formulaire et par la suite l'envoyer </p><br>
    <form method="post" action="formResult.php" >
        <label for="firstname">Entrez votre Nom :  </label>
        <input type="text" id="firstname"><br><br>
        <label for="name">Entrez votre Prenom :  </label>
        <input type="text" id="name"><br><br>
        <label for="year">Entrez votre Age : </label>
        <input type="text" id="year"><br><br>
        <input type="button" value="envoyer">
    </form>
</body>
</html>