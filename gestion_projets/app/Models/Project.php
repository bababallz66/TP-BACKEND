<?php

namespace App\Models;

use \Core\Model;
use \Core\Interfaces\CrudInterface;
use PDO;

class Project extends Model implements CrudInterface
{
    public $id;
    public $nom;
    public $description;
    public $date_debut;
    public $date_fin;
    public $statut;
    public $created_at;
    private $table = 'projects';

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
        $stmt = self::$pdo->prepare("INSERT INTO {$this->table} (nom, description, date_debut, date_fin, created_at) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$this->nom, $this->description, $this->date_debut, $this->date_fin, $this->created_at]);
    }

    public function update($id)
    {
        $stmt = self::$pdo->prepare("UPDATE {$this->table} SET nom = ?, description = ?, date_debut = ?, date_fin = ?, statut = ?, created_at = ? WHERE id = ?");
        return $stmt->execute([$this->nom, $this->description, $this->date_debut, $this->date_fin, $this->statut, $this->created_at, $id]);
    }

    public function delete($id)
    {
        $stmt = self::$pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
