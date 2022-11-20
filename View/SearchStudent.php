<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tim kiem sinh vien</title>
   <style>
      .option-search{
         margin-left: 170px;
         margin-top: 10px;
      }

      .searchbtn{
         margin-left: 210px;
         margin-top: 10px;
      }
   </style>
</head>

<body>
   <form action="C_Student.php" method="GET">
      <div>
         <lable>Nhập thông tin tìm kiếm:</lable>
         <input type="text" name="search" placeholder="Nhap tu khoa tim kiem"/>
      </div>

      <div class="option-search">
         <select name="optionSearch" >
            <option value="searchId">Tim kiem theo ID</option>
            <option value="searchName">Tim kiem theo ten</option>
            <option value="searchAge">Tim kiem theo tuoi</option>
            <option value="searchUniversity">Tim kiem theo university</option>
         </select>
      </div>
      <button name="btnTimkiemNV" class="searchbtn">Tìm Kiếm</button>
      <p><a href="../index.php">BACK</a></p>
   </form>
</body>

</html>