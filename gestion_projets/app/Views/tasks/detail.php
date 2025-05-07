<h1>Détail du projet</h1>
<p><strong>Id :</strong> <?= htmlspecialchars($task['id']) ?></p>
<p><strong>Id du Projet :</strong> <?= htmlspecialchars($task['project_id']) ?></p>
<p><strong>Titre :</strong> <?= htmlspecialchars($task['titre']) ?></p>
<p><strong>Statut :</strong> <?= htmlspecialchars($task['statut']) ?></p>
<p><strong>Date Limite :</strong> <?= htmlspecialchars($task['date_limite']) ?></p>
<p><strong>Id de l'Utilisateur :</strong> <?= htmlspecialchars($task['user_id']) ?></p>
<p><strong>Creer le :</strong> <?= htmlspecialchars($task['created_at']) ?></p>

<a href="/gestion_projets/public/index.php?controller=task&action=index">⬅ Retour à la liste</a>
