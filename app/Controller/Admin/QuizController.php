<?php
namespace App\Controller\Admin;

use App\Controller\BaseController;
use App\Model\Quiz;
use App\Model\Subject;

class QuizController extends BaseController
{
    protected $subjectModel;
    protected $quizModel;

    public function __construct()
    {
        $this->subjectModel = new Subject();
        $this->quizModel = new Quiz();
    }
    public function addQuiz()
    {
        $listSubject = $this->subjectModel->getSubject();
        return $this->render('admin.page.quiz.add', compact('listSubject'));
    }
    public function saveQuiz()
{
    if (isset($_POST["add_quiz"])) {
        $name_quiz = $_POST['name_quiz'];
        $id_subject = $_POST['id_subject'];
      
             // Insert quiz <information></information>
            $quizId = $this->quizModel->insertQuiz($name_quiz, $id_subject);

        // Array to store quiz information
        $quizData = array(
            'name_quiz' => $name_quiz,
            'id_subject' => $id_subject,
            'questions' => array(),
        );

        $numQuestions = count($_POST['questions_name']);
        for ($index = 0; $index < $numQuestions; $index++) {
            $question = isset($_POST['questions_name'][$index]) ? $_POST['questions_name'][$index] : null;
            $point = isset($_POST['point'][$index]) ? $_POST['point'][$index] : null;

                // Insert question information
                $questionId = $this->quizModel->insertQuestion($quizId, $question, $point);

            $questionData = array(
                'question' => $question,
                'point' => $point,
                'options' => array(),
            );

            $options = isset($_POST['option'][$index]) && is_array($_POST['option'][$index]) ? $_POST['option'][$index] : array();

            $numOptions = count($options);
            for ($optionIndex = 0; $optionIndex < $numOptions; $optionIndex++) {
                $optionText = isset($options[$optionIndex]) ? $options[$optionIndex] : null;
                $isChecked = isset($_POST['iscorrect'][$index][$optionIndex]);

                    // Insert option information
                    $this->quizModel->insertOption($questionId, $optionText, $isChecked);

                $optionData = array(
                    'option' => $optionText,
                    'iscorrect' => $isChecked,
                );

                $questionData['options'][] = $optionData;
            }

            $quizData['questions'][] = $questionData;
        }

        header("Location:" . route('/listquiz'));
    }
}
    public function listQuiz()
    {
        $list = $this->quizModel->getQuizz();
        $this->render('admin.page.quiz.list', compact('list'));
    }
    public function listQuestion($id)
    {
        $listQ = $this->quizModel->getQuestionId($id);
        $this->render('admin.page.quiz.listQues', compact('listQ'));
    }
    public function viewQuiz($id)
    {
        $view = $this->quizModel->getQuizID($id);
        $listView = count($view) > 0 ? $view[0] : [];
        $this->render('admin.page.quiz.update', compact('view', 'listView'));
    }
    public function updateQuiz()
    {
        if (isset($_POST["update"])) { // Sửa lại tên của nút submit thành 'update_quiz'
            $quizId = $_POST['id']; // Lấy ID của quiz từ form

            // Update quiz information
            $name_quiz = $_POST['name_quiz'];
            $id_subject = $_POST['id_subject'];
            $this->quizModel->updateQuiz($name_quiz, $id_subject, ['id' => $quizId]);

            // Loop through each question to update
            foreach ($_POST['questions'] as $question) {
                $questionId = $question['question_id'];
                $questionText = $question['question_text'];
                $point = $question['point'];

                // Update question information
                $this->quizModel->updateQuestion($questionText, $point, ['id' => $questionId]);

                // Loop through each option to update
                foreach ($question['options'] as $option) {
                    $optionId = $option['option_id'];
                    $optionText = $option['option_text'];
                    $isChecked = $option['is_correct'];

                    // Update option information
                    $this->quizModel->updateOption($optionText, $isChecked, ['id' => $optionId]);
                }
            }

            header("Location:" . route('/listquiz'));
        }
    }

}