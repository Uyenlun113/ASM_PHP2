<?php
namespace App\Model;

use App\Model\Db;

class Quiz extends Db
{
  public function insertQuiz($name_quiz, $id_subject)
  {
    $sql = "INSERT INTO quiz(name_quiz, id_subject) VALUES ('$name_quiz', '$id_subject')";
    return $this->getData($sql, false);
  }

  public function insertQuestion($id_quiz, $questions_name, $point)
  {
    $sql = "INSERT INTO questions(id_quiz, questions_name, point) VALUES ('$id_quiz', '$questions_name', '$point')";
    return $this->getData($sql,false);


  }

  public function insertOption($id_question, $option, $iscorrect)
  {
    $sql = "INSERT INTO answer(id_question, option, iscorrect) VALUES ('$id_question', '$option', '$iscorrect')";
    echo $sql;
    return $this->getData($sql);
  }
  public function getQuizz(){
    $sql = "SELECT  quiz.name_quiz, quiz.id_subject, subject.subject_name
            FROM quiz
            INNER JOIN subject ON quiz.id_subject = subject.id;
            ";
    $result = $this->getData( $sql );
        return $result;
    
    
  }


}
?>