<h1>Détail du projet</h1>

<p><strong>Id :</strong> <?= htmlspecialchars($project['id']) ?></p>
<p><strong>Nom :</strong> <?= htmlspecialchars($project['nom']) ?></p>
<p><strong>Description :</strong> <?= htmlspecialchars($project['description']) ?></p>
<p><strong>Date de debut :</strong> <?= htmlspecialchars($project['date_debut']) ?></p>
<p><strong>Date de fin :</strong> <?= htmlspecialchars($project['date_fin']) ?></p>
<p><strong>Statut :</strong> <?= htmlspecialchars($project['statut']) ?></p>
<p><strong>Creer le :</strong> <?= htmlspecialchars($project['created_at']) ?></p>

<a href="/gestion_projets/public/index.php?controller=project&action=index">⬅ Retour à la liste</a>
