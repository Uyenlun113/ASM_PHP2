<?php
namespace App\Model;

use App\Model\Db;

class Quiz extends Db
 {
    public function insertQuiz( $name_quiz, $id_subject )
 {
        $sql = "INSERT INTO quiz(name_quiz, id_subject) VALUES ('$name_quiz', '$id_subject')";
        return $this->getData( $sql, false );
    }

    public function insertQuestion( $id_quiz, $questions_name, $point )
 {
        $sql = "INSERT INTO questions(id_quiz, questions_name, point) VALUES ('$id_quiz', '$questions_name', '$point')";
        return $this->getData( $sql, false );

    }

    public function insertOption( $id_question, $option, $iscorrect )
 {
        $sql = "INSERT INTO answer(id_question, option, iscorrect) VALUES ('$id_question', '$option', '$iscorrect')";
        echo $sql;
        return $this->getData( $sql );
    }

    public function getQuizz()
 {
        $sql = "SELECT quiz.id,  quiz.name_quiz, quiz.id_subject, subject.subject_name
            FROM quiz
            INNER JOIN subject ON quiz.id_subject = subject.id
            ";
        $result = $this->getData( $sql );

        return $result;
    }

    public function getQuestionId( $id )
 {
        $sql = "SELECT *
            FROM questions
            WHERE questions.id_quiz = '$id'";
        $result = $this->getData( $sql );
        return $result;
    }

    public function getQuizID($id)
 {
        $sql = "SELECT qz.*, q.id as question_id, q.questions_name, q.point, a.id as answer_id, a.option, a.iscorrect
          FROM quiz qz
          JOIN questions q ON qz.id = q.id_quiz
          LEFT JOIN answer a ON q.id = a.id_question
          WHERE qz.id = '$id'
          ";
        $result = $this->getData( $sql );
        return $result;
    }

    public function updateQuiz( $id_quiz, $name_quiz, $id_subject )
 {
        $sql = "UPDATE quiz SET name_quiz='$name_quiz', id_subject='$id_subject' WHERE id='$id_quiz'";
        return $this->getData( $sql, false );
    }

    public function updateQuestion( $id_question, $questions_name, $point )
 {
        $sql = "UPDATE questions SET questions_name='$questions_name', point='$point' WHERE id='$id_question'";
        return $this->getData( $sql, false );
    }

    public function updateOption( $id_answer, $option, $iscorrect )
 {
        $sql = "UPDATE answer SET option='$option', iscorrect='$iscorrect' WHERE id='$id_answer'";
        return $this->getData( $sql, false );
    }

}