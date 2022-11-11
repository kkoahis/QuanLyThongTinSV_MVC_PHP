III. Bài tập áp dụng mô hình MVC:
   - Tạo cơ sở dữ liệu: DULIEU (thống nhất tên cơ sở dữ liệu là như vậy)
      + Tạo bảng: SinhVien(ID, Name, Age, Universiry)
      + Viết ứng dụng Quản Lý Thông Tin Sinh Viên theo mô hình MVC với các chức năng
         _ Xem thông tin sinh viên
         _ Chèn thêm thông tin sinh viên
         _ Cập nhật thông tin sinh viên
         _ Tìm kiếm sinh viên
         _ Xóa sinh viên

   - Xây dựng chức năng Xem thông tin sinh viên theo mô hình MCV:
      - Tạo thư mục: MVC_EXAMPLE
         + Controller -> C_Student.php
         + Model -> {E_Student.php, M_Student.php}
         + View -> {StudentList.html, StudentDetail.html}
         + Index.php

      {
                      View -> Controller -> Model {BO, DAO, Bean_entity}
         <- Client <- View <- Controller <- Model {BO, DAO, Bean_entity}
                              | gọi Model
                              | nhận KQ tử Model
                              | lựa chọn View
      }
         

