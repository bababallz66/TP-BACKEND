<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    private $projectModel;

    public function __construct()
    {
        $this->projectModel = new Project();
    }

    public function index()
    {
        $this->projectModel = new Project();
        $projects = $this->projectModel->getAll();
        $this->render("projects/list", ['projects' => $projects]);
    }

    public function show()
    {
        if (!isset($_GET['id'])) {
            die('error project controller show');
        }
        $this->projectModel = new Project();
        $project = $this->projectModel->getById($_GET['id']);
        $this->render("projects/detail", ['project' => $project]);
    }

    public function edit()
    {
        if (!isset($_GET['id'])) {
            die('error project controller edit');
        }
        $this->projectModel = new Project();
        if ($_GET['id'] == 0) {
            $this->render('projects/form');
        } else {
            $project = $this->projectModel->getById($_GET['id']);
            $this->render('projects/form', ['project' => $project]);
        };
    }
    public function create()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->projectModel->nom = $_POST['nom'];
            $this->projectModel->description = $_POST['description'];
            $this->projectModel->date_debut = $_POST['date_debut'];
            $this->projectModel->date_fin = $_POST['date_fin'];
            $timestamp = time();
            $currentDate = gmdate('Y-m-d', $timestamp);
            $this->projectModel->created_at = $currentDate;
            $this->projectModel->save();
            $this->index();
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->projectModel->nom = $_POST['nom'];
            $this->projectModel->description = $_POST['description'];
            $this->projectModel->date_debut = $_POST['date_debut'];
            $this->projectModel->date_fin = $_POST['date_fin'];
            $this->projectModel->statut = $_POST['statut'];
            $this->projectModel->update($_GET['id']);
            $this->index();
        }  
    }

    public function delete()
    {
        if (!isset($_GET['id'])) {
            die('error project controller delete');
        }
        $this->projectModel->delete($_GET['id']);
        $this->index();
    }
}
