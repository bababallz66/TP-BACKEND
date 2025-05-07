<h1>Bienvenue <?= htmlspecialchars($User['nom']) ?> <?= htmlspecialchars($User['prenom']) ?>👋</h1>

<p>Rôle : <strong><?= htmlspecialchars($User['role']) ?></strong></p>

<ul>
    <li><a href="/gestion_projets/public/index.php?controller=project&action=index">Voir les projets</a></li>
    <li><a href="/gestion_projets/public/index.php?controller=task&action=index">Voir les tâches</a></li>
    <li><a href="/gestion_projets/public/index.php?controller=user&action=login">Se déconnecter</a></li>
</ul>