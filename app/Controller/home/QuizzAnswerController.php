<?php
namespace App\Controller\Home;

use App\Controller\BaseController;
use App\Model\Quiz;
use App\Model\Subject;

class QuizzAnswerController extends BaseController
{
    protected $subjectModel;
    protected $quizModel;

    public function __construct()
    {
        $this->subjectModel = new Subject();
        $this->quizModel = new Quiz();
    }
  
       public function QuizzAnswer($id)
    {
        $listQ = $this->quizModel->getQuizID($id);
    echo json_encode($listQ);
        $this->render('home.QuizzAnswer', compact('listQ'));
    }

}