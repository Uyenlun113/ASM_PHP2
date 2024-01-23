<?php
require_once 'controller/admin/subject.php';

$url = isset( $_GET[ 'url' ] ) ? $_GET[ 'url' ] : 'list-subject';
switch ( $url ) {
    case 'add-subject':
    $subject = new SubjectController();
    $subject->addSubject();
    break;
    case 'list-subject':
    $Listsubject = new SubjectController();
    $Listsubject->listSubject();
    break;
     case 'update-subject':
    $updateSubject = new SubjectController();
    $updateSubject->update();
    break;
     case 'delete-subject':
    $Listsubject = new SubjectController();
    $Listsubject->deleSubject();
    break;
     case 'login-admin':
    
    break;
}