<?php
require_once("model/config.php");
require_once("model/subject.php");

class SubjectController
{
    function validateSubject($code_subject, $subject_name) {
        $error = [];
    
        // validate name
        if (empty(trim($subject_name))) {
            $error['subject_name']['required'] = 'Tên môn học không được để trống';
        } else {
            if (strlen(trim($subject_name)) < 6) {
                $error['subject_name']['length'] = 'Tên sản phẩm lớn hơn 6 ký tự';
            }
        }
    
        // validate code
        if (empty(trim($code_subject))) {
            $error['code_subject']['required'] = 'Mã không được để trống';
        } else {
            if (strlen(trim($code_subject)) < 3) {
                $error['code_subject']['length'] = 'Mã phải từ 3 ký tự trở lên';
            }
        }
        
        return $error;
    }
    
    function addSubject()
    {
        if (isset($_POST['add-subject'])) {
            $code_subject = $_POST['code_subject'];
            $subject_name = $_POST['subject_name'];
            $description = $_POST['description'];
            $validationError = $this->validateSubject($code_subject, $subject_name);
            if (!empty($validationError)) {
                $_SESSION['error_mess'] = $validationError;
            } else {
                $subject = new SubjectModel();
                $addSubject = $subject->insertSubject($code_subject, $subject_name, $description);
                header("location:index.php?url=list-subject");
            }
            
        }
        include "view/admin/page/subject/add.php";
    }
    function listSubject()
    {
        $subject = new SubjectModel();
        $list = $subject->getSubject();
        include "view/admin/page/subject/list.php";
    }
    function deleSubject()
    {
        $subjectIdToDelete = isset($_GET['id']) ? $_GET['id'] : null;
        $delete = new SubjectModel();
        $deleteSubj = $delete->deleteSubject($subjectIdToDelete);
        header("location:index.php?url=list-subject");
        include "view/admin/page/subject/list.php";
    }
    function viewUpdate() {
        $id = $_POST['id'];
        $subject = new SubjectModel();
        $list = $subject->getSubjectID($id);
        include "view/admin/page/subject/update.php";
    
}

function update() {
    if (isset($_POST['update-subject'])) {
        $id = $_POST['id'];
        $code_subject = $_POST['code_subject'];
        $subject_name = $_POST['subject_name'];
        $description = $_POST['description'];

        // Validate the data
        $validationError = $this->validateSubject($code_subject, $subject_name);

        if (!empty($validationError)) {
            $_SESSION['error_mess'] = $validationError;
        } else {
            $subject = new SubjectModel();
            $subject->updateSubject($id, $code_subject, $subject_name, $description);
            header("location:index.php?url=list-subject");
            exit();
        }
    } else {
        // Handle the case when the form is not submitted
        // You may want to redirect or show an error message
    }
}

}