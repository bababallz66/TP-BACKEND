<?php
$isEdit = isset($task);
$action = $isEdit
    ? "/gestion_projets/public/index.php?controller=task&action=update&id=" . $task['id']
    : "/gestion_projets/public/index.php?controller=task&action=create&id=0";
?>

<h1><?= $isEdit ? 'Modifier la tache' : 'Créer une nouvelle tache' ?></h1>

<form method="post" action="<?= $action ?>">
    <?php if (!$isEdit): ?>
        <label>project_id :
            <input type="text" name="project_id" required
                value="<?= $isEdit ? htmlspecialchars($task['project_id']) : '' ?>">
        </label><br>
    <?php endif; ?>
    <label>titre :
        <textarea name="titre"><?= $isEdit ? htmlspecialchars($task['titre']) : '' ?></textarea>
    </label><br>

    <label>Description :
        <textarea name="description"><?= $isEdit ? htmlspecialchars($task['description']) : '' ?></textarea>
    </label><br>
    
    <?php if ($isEdit): ?>
    <label>Statut :
        <select name="statut">
            <option value="en_cours" <?= $task['statut'] === 'en_cours' ? 'selected' : '' ?>>En cours</option>
            <option value="termine" <?= $task['statut'] === 'termine' ? 'selected' : '' ?>>Terminé</option>
            <option value="en_attente" <?= $task['statut'] === 'a_faire' ? 'selected' : '' ?>>En attente</option>
        </select>
    </label><br>
    <?php endif; ?>

    <label>Date limite :
        <input type="date" name="date_limite" required
            value="<?= $isEdit ? htmlspecialchars($task['date_limite']) : '' ?>">
    </label><br>

    <label>Id de l'utilisateur :
        <input type="text" name="user_id" required
            value="<?= $isEdit ? htmlspecialchars($task['user_id']) : '' ?>">
    </label><br>



    <button type="submit"><?= $isEdit ? 'Enregistrer' : 'Créer' ?></button>
</form>

<a href="/gestion_projets/public/index.php?controller=task&action=index">Annuler</a>