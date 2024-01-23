<?php
require_once 'config.php';

class SubjectModel extends Db {
    function insertSubject( $code_subject, $subject_name, $description ) {
        $sql = "INSERT INTO subject(code_subject,subject_name,description) VALUES ('$code_subject','$subject_name','$description') ";
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
    function updateSubject($id) {
        $sql = "UPDATE subject SET code_subject = ?, subject_name = ?, description = ? WHERE id = ?";
        $result = $this->getData( $sql );
        return $result;
    }
    
    
    
}
?>