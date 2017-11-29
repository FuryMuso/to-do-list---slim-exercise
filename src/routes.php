<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    include_once('src/classes/modelMethods/TaskModels.php');
    include_once('src/classes/dbConnector.php');

    $dbconnector = new DbConnector();
    $task = new taskModels($dbconnector->db);
    $tasks = $task->getAllTaskData();
    $taskData = ['tasks' => $tasks];

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $taskData);
});

$app->get('/createTask', function (Request $request, Response $response, array $args) {
    include_once('src/classes/modelMethods/TaskModels.php');
    include_once('src/classes/dbConnector.php');

    $dbconnector = new DbConnector();
    $task = new TaskModels($dbconnector->db);
    $task->createNewTask($_GET['submitData']);

    return $response->withRedirect('/');
});

$app->get('/markAsDone', function (Request $request, Response $response, array $args) {
    include_once('src/classes/modelMethods/TaskModels.php');
    include_once('src/classes/dbConnector.php');

    $dbconnector = new DbConnector();
    $task = new TaskModels($dbconnector->db);
    $task->updateTaskDataById($_GET['task']);

    return $response->withRedirect('/');
});