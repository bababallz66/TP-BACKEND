<?php
$isEdit = isset($project);
$action = $isEdit
    ? "/gestion_projets/public/index.php?controller=project&action=update&id=" . $project['id']
    : "/gestion_projets/public/index.php?controller=project&action=create&id=0";
?>

<h1><?= $isEdit ? 'Modifier le projet' : 'Créer un nouveau projet' ?></h1>

<form method="post" action="<?= $action ?>">
    <label>Nom :
        <input type="text" name="nom" required
            value="<?= $isEdit ? htmlspecialchars($project['nom']) : '' ?>">
    </label><br>

    <label>Description :
        <textarea name="description"><?= $isEdit ? htmlspecialchars($project['description']) : '' ?></textarea>
    </label><br>

    <label>Date de debut :
        <input name="date_debut" type="datetime"><?= $isEdit ? htmlspecialchars($project['date_debut']) : '' ?></input>
    </label><br>

    <label>Date de fin :
        <input type="datetime" name="date_fin"><?= $isEdit ? htmlspecialchars($project['date_fin']) : '' ?></input>
    </label><br>

    <?php if ($isEdit): ?>
        <label>Statut :
            <select name="statut">
                <option value="en_cours" <?= $project['statut'] === 'en_cours' ? 'selected' : '' ?>>En cours</option>
                <option value="termine" <?= $project['statut'] === 'termine' ? 'selected' : '' ?>>Terminé</option>
                <option value="en_attente" <?= $project['statut'] === 'en_attente' ? 'selected' : '' ?>>En attente</option>
            </select>
        </label><br>
    <?php endif; ?>
    <button type="submit"><?= $isEdit ? 'Enregistrer' : 'Créer' ?></button>
</form>

<a href="/gestion_projets/public/index.php?controller=project&action=index">Annuler</a>