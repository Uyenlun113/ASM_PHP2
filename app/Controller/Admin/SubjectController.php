<?php
namespace App\Controller\Admin;

use App\Controller\BaseController;
use App\Model\Subject;

class SubjectController extends BaseController
{
    protected $subjectModel;

    public function __construct()
    {
        $this->subjectModel = new Subject();
    }
    public function validateSubject($code_subject, $subject_name)
    {
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

    public function add()
    {
        return $this->render('admin.page.subject.add');
    }
    public function addSubject()
    {
        $code_subject = $_POST['code_subject'];
        $subject_name = $_POST['subject_name'];
        $description = $_POST['description'];
       

        $validationError = $this->validateSubject($code_subject, $subject_name);

        if (!empty($validationError)) {
            $_SESSION['error_mess'] = $validationError;
            $this->render('admin.page.subject.add');
            return;
        }

        // Handle file upload
        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = 'app/upload/' . $_FILES['image']['name'];
            $temp_path = $_FILES['image']['tmp_name'];
            move_uploaded_file($temp_path, $image);
            
            
        } else {
            echo 'Lỗi tải lên hình ảnh: ' . $_FILES[ 'image' ][ 'error' ];
        }
        $add = $this->subjectModel->insertSubject($code_subject, $subject_name,$image, $description );
        
               header("Location:".route('/list'));
           
        }

    public function listSubject()
    {
        $title = "Danh sách môn học";
        $list = $this->subjectModel->getSubject();
        $this->render('admin.page.subject.list', compact('list', 'title'));
    }

    public function deleSubject($id)
    {
        $delete = $this->subjectModel->deleteSubject($id);
        header("Location:".route('/list'));
    }
    public function view($id)
    {
        $view = $this->subjectModel->getSubjectID($id);
        $listView = count($view) > 0 ? $view[0] : [];
        $this->render('admin.page.subject.update', compact('view', 'listView'));
    }

    public function viewUpdate($id)
    {
        $id = $_POST['id'];
        $code_subject = $_POST['code_subject'];
        $subject_name = $_POST['subject_name'];
        $description = $_POST['description'];
        $update = $this->subjectModel->updateSubject($id, $code_subject, $subject_name, $description);
        header("Location:".route('/list'));

        // }
        // include 'view/admin/page/subject/update.php';
    }

}