<?php
include_once("../Model/M_Student.php");

class Ctrl_Student
{
    public function invoke()
    {
        if (isset($_GET['stid'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/StudentDetail.php");
        }

        else if (isset($_GET['mod1'])) {
            include_once("../View/AddStudent.php");
        } 

        else if (isset($_POST['btnAddSV'])) {
            var_dump($_POST);
            $id = $_REQUEST['id'];
            $name = $_REQUEST['tensv'];
            $age = $_REQUEST['tuoi'];
            $university = $_REQUEST['university'];

            $modelStudent = new Model_Student();
            $modelStudent->addStudent($id, $name, $age, $university);
            // header("location: C_Student.php?mod1='1'"); truyen mod1='1' de quay ve trang them sinhvien
            header("location: C_Student.php");
        }
        
        else if(isset($_GET['mod2'])){
            include_once("../View/EditStudent.php");
        }

        else {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }
    }
}

$C_Student = new Ctrl_Student();
$C_Student->invoke();   //mục đích là để khi vào C_Student thì luôn gọi đến hàm invoke thôi
