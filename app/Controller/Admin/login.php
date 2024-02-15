<?php
namespace App\Controller\Admin;

use App\Model\loginModel;

class loginController
{
    public function dangki()
    {
        if (isset($_POST['dangki'])) {
            $users_name = $_POST['users_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = 1;
            $dangki = new loginModel();
            $dangki->insertUser($users_name, $password, $email, $role);
            header("location:index.php?url=login");
        }
        include "view/admin/page/user/dangki.php";

    }
    public function dangnhap()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            if (empty($user_name) || empty($password)) {
                $thongbao = "khong dung";
            } else {
                $dangnhap = new loginModel();
                $dangnhap->login($user_name, $password);
                header("location:index.php");

            }

        }
        include "view/admin/page/user/login.php";
    }

}