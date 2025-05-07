<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class UserController extends Controller
{
    private $UserModel;

    public function __construct()
    {
        $this->UserModel = new User();
    }

    public function login()
    {
        $this->UserModel = new User();
        $Users = $this->UserModel->getAll();
        $this->render("Users/login", ['Users' => $Users]);
    }

    public function register()
    {
        $this->UserModel = new User();
        $this->render("users/register");
    }

    public function dashboard($id = null)
    {
        if (!isset($_GET['id']) and $id === null) {
            die('error User controller edit');
        }
        $this->UserModel = new User();

        if (isset($_GET['id'])) {
            $User = $this->UserModel->getById($_GET['id']);
        } else {
            $User = $this->UserModel->getById($id);
        }
        $this->render('Users/dashboard', ['User' => $User]);
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->UserModel->nom = $_POST['nom'];
            $this->UserModel->prenom = $_POST['Prenom'];
            $this->UserModel->email = $_POST['email'];
            $this->UserModel->mot_de_passe = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->UserModel->role = '';
            $timestamp = time();
            $currentDate = gmdate('Y-m-d', $timestamp);
            $this->UserModel->created_at = $currentDate;
            $this->UserModel->save();
            $this->login();
        }
    }

    public function update($data)
    {
        $this->UserModel->nom = $data['nom'];
        $this->UserModel->prenom = $data['prenom'];
        $this->UserModel->email = $data['email'];
        $this->UserModel->mot_de_passe = $data['mot_de_passe'];
        $this->UserModel->role = $data['role'];
        $this->UserModel->created_at = $data['created_at'];
        $this->UserModel->update($data['id']);
    }

    public function connexion()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $User = $this->UserModel->getByMail($_POST['email']);
            if ($User) {
                if (password_verify($_POST['password'], $User['mot_de_passe'])) {
                    $this->dashboard($User['id']);
                } else {
                    $this->login();
                }
            } else {
                $this->login();
            }
        }
    }
}
