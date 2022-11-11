<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thông tin chi tiết học sinh</title>
</head>

<body>
   <h2>Chi tiet sinh vien</h2>
   <?php
      echo "<p>Name: <b>" . $student->name . "</b></p>";
      echo "<p>Age: <b>" . $student->age . "</b></p>";
      echo "<p>University: <b>" . $student->university . "</b></p>";
   ?>
</body>

</html>