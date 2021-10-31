<?php
    // Dịch vụ bảo vệ:
    session_start(); //Công ty dịch vụ Bảo vệ

    if(isset($_POST['sbmGuiDi'])){
        $username = $_POST['txtEmail'];
        $password = $_POST['txtPass'];
        $password2 = md5($password);
        // Bước 01: Kết nối DB Server
        $conn = mysqli_connect('localhost','root','','food_order');
        if(!$conn){
            die("Không thể kết nối");
        }
        // Bước 02: Truy vấn thông tin
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password2'";
        $result = mysqli_query($conn,$sql);

        // Bước 03: Xác thực > Đăng nhập > Ở trên, trả về 1 bản ghi thôi
        if(mysqli_num_rows($result) > 0){
            // Bảo vệ cửa CHÍNH: kiểm tra xác thực
            $_SESSION['loginOK'] = $username;
            header("Location: admin/index.php");
        }else{
            header("Location: index.php");
        }
    }
?>