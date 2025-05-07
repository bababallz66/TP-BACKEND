<?php

namespace App\Models;

use \Core\Model;
use \Core\Interfaces\CrudInterface;
use PDO;

class User extends Model implements CrudInterface
{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $mot_de_passe;
    public $role;
    public $created_at;
    private $table = 'Users';

    public function __construct()
    {
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

    public function getByMail($Mail)
    {
        $stmt = self::$pdo->prepare("SELECT * FROM {$this->table} WHERE email = ?");
        $stmt->execute([$Mail]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function save()
    {
        // Exemple simple – à adapter avec des propriétés
        $stmt = self::$pdo->prepare("INSERT INTO {$this->table} (nom, prenom, email, mot_de_passe, role, created_at) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$this->nom, $this->prenom, $this->email, $this->mot_de_passe, $this->role, $this->created_at]);
    }

    public function update($id)
    {
        $stmt = self::$pdo->prepare("UPDATE {$this->table} SET nom = ?, prenom = ?, email = ?, mot_de_passe = ?, role = ?, created_at = ? WHERE id = ?");
        return $stmt->execute([$this->nom, $this->prenom, $this->email, $this->mot_de_passe, $this->role, $this->created_at, $id]);
    }

    public function delete($id)
    {
        $stmt = self::$pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
