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

        else if(isset($_POST['checkEdit'])){
            $id = $_REQUEST['id'];
            
            $modelStudent = new Model_Student();
            $lmaostudent = $modelStudent->getStudentDetail($id);
            include_once("../View/FormEdit.php");
        }

        else if(isset($_POST['btnEditSV'])){
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $university = $_REQUEST['university'];

            $modelStudent = new Model_Student();
            $modelStudent->updateStudent($id, $name, $age, $university);
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }

        else if(isset($_GET['mod3'])){
            include_once("../View/DeleteStudent.php");
        }

        else if(isset($_POST['btnXoaSV'])){
            $id = $_REQUEST['id'];

            $modelStudent = new Model_Student();
            $modelStudent->deleteStudent($id);

            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }

        else if(isset($_GET['mod4'])){
            include_once("../View/SearchStudent.php");
        }

        else if(isset($_GET['btnTimkiemNV'])){
            $check1 = $_GET['search'];
            $column1 = $_GET['optionSearch'];

            $modelStudent = new Model_Student();
            $result = $modelStudent->searchStudent($check1, $column1);

            include_once("../View/SearchInfoStudent.php");
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
