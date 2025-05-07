
<h1>Connexion</h1>

<form action="/gestion_projets/public/index.php?controller=user&action=connexion" method="post">
    <div>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required maxlength="50">
    </div>

    <div>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Se connecter</button>
</form>

<p><a href="/gestion_projets/public/index.php?controller=user&action=register">Inscription</a></p>
