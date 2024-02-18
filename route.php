<?php
use Phroute\Phroute\RouteCollector;

use App\Controller\Admin\SubjectController;
use App\Controller\Admin\QuizController;
$url = isset($_GET['url']) ? $_GET['url'] : 'list';
$router = new RouteCollector();

//Subject
$router->get('list', [SubjectController::class,'listSubject']);
$router->get('/add-subject', [SubjectController::class,'add']);
$router->post('/add', [SubjectController::class,'addSubject']); 
$router->get('/delete/{id}',[SubjectController::class, 'deleSubject']);
$router->get('/subject/{id}/update', [SubjectController::class, 'view']);
$router->post('/subject/{id}/update', [SubjectController::class, 'viewUpdate']);

//Quiz
$router->get('/add-quiz', [QuizController::class,'addQuiz']);
$router->post('/add-quiz', [QuizController::class,'saveQuiz']); 
$router->get('/listquiz', [QuizController::class,'listQuiz']);
$router->get('/listques/{id}', [QuizController::class,'listQuestion']);
$router->get('/quiz/{id}/update', [QuizController::class, 'viewQuiz']);
$router->post('/quiz/{id}/update', [QuizController::class, 'viewUpdate']);


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
 ?>