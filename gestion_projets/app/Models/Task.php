<?php

namespace App\Models;

use \Core\Model;
use \Core\Interfaces\CrudInterface;
use PDO;

class Task extends Model implements CrudInterface
{
    public $id;
    public $project_id;
    public $titre;
    public $description;
    public $statut;
    public $date_limite;
    public $user_id;
    public $created_at;
    private $table = 'Tasks';

    public function __construct() {
        parent::__construct();
    }

    public function getAll()
    {
        $stmt = self::$pdo->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = self::$pdo->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save()
    {
        // Exemple simple – à adapter avec des propriétés
        $stmt = self::$pdo->prepare("INSERT INTO {$this->table} (project_id, titre, description, date_limite,  user_id, created_at) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$this->project_id, $this->titre, $this->description, $this->date_limite, $this->user_id, $this->created_at]);
    }

    public function update($id)
    {
        $stmt = self::$pdo->prepare("UPDATE {$this->table} SET titre = ?, description = ?, statut = ?, date_limite = ?, user_id = ? WHERE id = ?");
        return $stmt->execute([$this->titre, $this->description,  $this->statut, $this->date_limite, $this->user_id, $id]);
    }

    public function delete($id)
    {
        $stmt = self::$pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
