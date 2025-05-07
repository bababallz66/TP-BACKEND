
<h1>Liste des taches</h1>

<a href="/gestion_projets/public/index.php?controller=task&action=edit&id=0">+ Nouvelle tache</a>
<a href="javascript:history.back()">Retour Arriere</a>

<ul>
<?php foreach ($tasks as $task): ?>
    <li>
        <strong><?= htmlspecialchars($task['project_id']) ?></strong>
        <strong><?= htmlspecialchars($task['titre']) ?></strong>
        <a href="/gestion_projets/public/index.php?controller=task&action=show&id=<?= $task['id'] ?>">Détails</a> |
        <a href="/gestion_projets/public/index.php?controller=task&action=edit&id=<?= $task['id'] ?>">Modifier</a> |
        <a href="/gestion_projets/public/index.php?controller=task&action=delete&id=<?= $task['id'] ?>">Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
