<?php
namespace App\Model;

use App\Model\Db;

class Subject extends Db {
    function insertSubject( $code_subject, $subject_name,$image, $description ) {
        $sql = "INSERT INTO subject(code_subject,subject_name,image,description) VALUES ('$code_subject','$subject_name','$image','$description') ";
        return $this->getData( $sql );
    }

    function getSubject() {
        $sql = " SELECT * FROM subject ";
        $result = $this->getData( $sql );
        return $result;
    }
    function getSubjectID($id) {
        $sql = " SELECT * FROM subject WHERE id = '$id' ";
        $result = $this->getData( $sql );
        return $result;
    }
    function deleteSubject($id) {
        $sql = "DELETE FROM subject WHERE id = '$id'";
        $result = $this->getData( $sql );
        return $result;
    }
    function updateSubject($id, $code_subject, $subject_name, $description) {
        $sql = "UPDATE subject SET code_subject = '$code_subject', subject_name = '$subject_name', description = '$description' WHERE id = '$id'";
        echo ($sql);
        $result = $this->getData( $sql );
        return $result;
    }
}
?>