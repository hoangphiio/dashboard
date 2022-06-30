<?php
session_start();
include('admin/config/dbcon.php');

if (isset($_POST['register_btn'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);

    if ($password == $confirm_password) {
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0) {
            // Already Email Exists
            $_SESSION['message'] = "Vui lòng nhập đầy đủ thông tin";
            header("Location: register.php");
            exit(0);
        } else {
            $user_query = "INSERT INTO users (fname, lname, email, password) VALUES ('$fname', '$lname','$email', '$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = "Đăng ký thành công";
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Không hợp lệ";
                header("Location: register.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Mật khẩu không trùng khớp";
        header("Location: register.php");
        exit(0);
    }
} else {
    header("Location: register.php");
    exit(0);
}
