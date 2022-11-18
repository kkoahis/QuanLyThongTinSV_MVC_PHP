<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thông tin chi tiết học sinh</title>
</head>

<body>
   <form action="C_Student.php" method="POST">
      <h2>Chi tiet sinh vien</h2>
      
      <div>
         <label for="">ID</label>
         <input type="text" name="id" value="<?php echo $lmaostudent->id ?>" readonly>
      </div>

      <div>
         <label for="">Ten sinh vien</label>
         <input type="text" name="name" value="<?php echo $lmaostudent->name ?>">
      </div>

      <div>
         <label for="">Tuoi sinh vien</label>
         <input type="text" name="age" value="<?php echo $lmaostudent->age ?>">
      </div>

      <div>
         <label for="">university</label>
         <input type="text" name="university" value="<?php echo $lmaostudent->university ?>">
      </div>

      <button name="btnEditSV">chinh sua</button>
   </form>

   <p><a href="../index.php">home page</a></p>

</body>

</html>