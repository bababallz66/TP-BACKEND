
<h1>Liste des projets</h1>

<a href="/gestion_projets/public/index.php?controller=project&action=edit&id=0">+ Nouveau projet</a>
<a href="javascript:history.back()">Retour Arriere</a>

<ul>
<?php foreach ($projects as $project): ?>
    <li>
        <strong><?= htmlspecialchars($project['nom']) ?></strong>
        <a href="/gestion_projets/public/index.php?controller=project&action=show&id=<?= $project['id'] ?>">Détails</a> |
        <a href="/gestion_projets/public/index.php?controller=project&action=edit&id=<?= $project['id'] ?>">Modifier</a> |
        <a href="/gestion_projets/public/index.php?controller=project&action=delete&id=<?= $project['id'] ?>">Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
