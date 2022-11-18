<?php
include_once("E_Student.php");

class Model_Student
{
   public function __construct()
   {
   }

   public function getAllStudent()
   {
      $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
      mysqli_select_db($link, 'DULIEU999');
      $rs = mysqli_query($link, "SELECT * FROM SINHVIEN");
      $i = 0;

      while ($row = mysqli_fetch_array($rs)) {
         $id = $row['id'];
         $name = $row['name'];
         $age = $row['age'];
         $university = $row['university'];
         while ($i != $id)
            $i++;
         $students[$i++] = new Entity_Student($id, $name, $age, $university);
      }
      return $students;
   }

   public function getStudentDetail($stid)
   {
      $allStudent = $this->getAllStudent();
      return $allStudent[$stid];
   }

   public function addStudent($id, $name, $age, $university)
   {
      $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
      mysqli_select_db($link, 'DULIEU999');

      $querry = "INSERT INTO SINHVIEN VALUES ($id, '$name', $age, '$university')";
      $rs = mysqli_query($link, $querry);
      mysqli_close($link);
   }

   public function updateStudent($id, $name, $age, $university)
   {
      $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:'. mysqli_error($link));
      mysqli_select_db($link, 'DULIEU999');

      $querry = "UPDATE SINHVIEN SET name = '$name', age = '$age', university = '$university' WHERE id = $id";
      $rs = mysqli_query($link, $querry);
      mysqli_close($link); 
   }
}
