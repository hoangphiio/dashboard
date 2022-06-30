<?php
include('includes/config.php');

$page_title = "Login Page";
$meta_description = "Login page description bloggin website";
$meta_keywords = "php, html, css, laravel, codeigniter, reactjs"; 
include('includes/header.php');

if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "Bạn đã đăng nhập thành công!";
    }
    header("Location: index.php");
    exit(0);
}

include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php include('message.php'); ?>

                <div class="card-header">
                    <h4>Đăng nhập</h4>
                </div>
                <div class="card-body">
                    <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Email ID</label>
                            <input type="email" name="email" require placeholder="Nhập địa chỉ Email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" require placeholder="Nhập mật khẩu email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="login_btn" require class="btn btn-primary">Đăng nhập</button>
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