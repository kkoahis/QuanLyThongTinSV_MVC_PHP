<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add sinh vien</title>
</head>

<body>
   <h2>them thong tin sinh vien</h2>
   <form action="C_Student.php" method="POST">
      <div>
         <lable for="idsv">Ma sinh vien</lable>
         <input type="text" name="id" id="id" />
      </div>

      <div>
         <lable for="tensv">Ten sinh vien</lable>
         <input type="text" name="tensv" id="tensv" />
      </div>

      <div>
         <lable for="tuoi">Tuoi sinh vien</lable>
         <input type="text" name="tuoi" id="tuoi" />
      </div>

      <div>
         <lable for="university">Dai hoc</lable>
         <input type="text" name="university" id="university" />
      </div>

      <button name="btnAddSV">Add Sv</button>
      <p><a href="../index.php">BACk</a></p>
   </form>
</body>

</html>