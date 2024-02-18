<?php
namespace App\Controller\Home;

use App\Controller\BaseController;
use App\Model\Quiz;
use App\Model\Subject;

class InputQuizzController extends BaseController
{
    protected $subjectModel;
    protected $quizModel;

    public function __construct()
    {
        $this->subjectModel = new Subject();
        $this->quizModel = new Quiz();
    }
    
    public function InputQuizz()
    {
        // $list = $this->quizModel->getQuizz();
        // $this->render('admin.page.quiz.list', compact('list'));
        $this->render('home.InputQuizz');
    }
   

}