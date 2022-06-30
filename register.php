<?php
include('includes/config.php');
$page_title = "Register Page";
$meta_description = "Login page description bloggin website";
$meta_keywords = "php, html, css, laravel, codeigniter, reactjs"; 
include('includes/header.php');

// if (isset($_SESSION['auth'])) {
//     $_SESSION['message'] = "Đăng nhập thành công";
//     header("Location: index.php");
//     exit(0);
// }
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php include('message.php') ?>

                <div class="card-header">
                    <h4>Đăng ký</h4>
                </div>
                <div class="card-body">

                    <form action="registercode.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input require type="text" name="fname" placeholder="Nhập First Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <input require type="text" name="lname" placeholder="Nhập Last Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                             <label for="">Email ID</label>
                            <input require type="email" name="email" placeholder="Nhập địa chỉ Email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mật khẩu</label>
                            <input require type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nhập lại mật khẩu</label>
                            <input require type="password" name="cpassword" placeholder="Nhập lại mật khẩu" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button require type="submit" name="register_btn" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>