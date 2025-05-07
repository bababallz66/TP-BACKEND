<h1>Inscription</h1>

<form action="/gestion_projets/public/index.php?controller=user&action=create" method="post">
    <div>
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required maxlength="50">
    </div>

    <div>
        <label for="Prenom">Prenom :</label><br>
        <input type="text" id="Prenom" name="Prenom" required maxlength="50">
    </div>

    <div>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required maxlength="50">
    </div>

    <div>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Inscription</button>
</form>

<p><a href="/gestion_projets/public/index.php?controller=user&action=login">Connexion</a></p>