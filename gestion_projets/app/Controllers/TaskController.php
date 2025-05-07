<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\task;

class TaskController extends Controller
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new Task();
    }

    public function index()
    {
        $this->taskModel = new Task();
        $tasks = $this->taskModel->getAll();
        $this->render("tasks/list", ['tasks' => $tasks]);
    }

    public function show()
    {
        if (!isset($_GET['id'])) {
            die('error task controller show');
        }
        $this->taskModel = new Task();
        $task = $this->taskModel->getById($_GET['id']);
        $this->render("tasks/detail", ['task' => $task]);
    }

    public function edit()
    {
        if (!isset($_GET['id'])) {
            die('error task controller edit');
        }
        $this->taskModel = new Task();
        if ($_GET['id'] == 0) {
            $this->render('tasks/form');
        } else {
            $task = $this->taskModel->getById($_GET['id']);
            $this->render('tasks/form', ['task' => $task]);
        };
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskModel->project_id = $_POST['project_id'];
            $this->taskModel->titre = $_POST['titre'];
            $this->taskModel->description = $_POST['description'];
            $this->taskModel->date_limite = $_POST['date_limite'];
            $this->taskModel->user_id = $_POST['user_id'];
            $timestamp = time();
            $currentDate = gmdate('Y-m-d', $timestamp);
            $this->taskModel->created_at = $currentDate;
            $this->taskModel->save();
            $this->index();
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskModel->titre = $_POST['titre'];
            $this->taskModel->description = $_POST['description'];
            $this->taskModel->statut = $_POST['statut'];
            $this->taskModel->date_limite = $_POST['date_limite'];
            $this->taskModel->user_id = $_POST['user_id'];
            $this->taskModel->update($_GET['id']);
            $this->index();
        }
    }

    public function delete()
    {
        if (!isset($_GET['id'])) {
            die('error task controller delete');
        }
        $this->taskModel->delete($_GET['id']);
        $this->index();
    }
}
