<?php
include('authentication.php');
include('middleware/superadminAuth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Chỉnh sửa</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chỉnh sửa User
                        <a href="view-register.php" class="btn btn-danger float-end">Trở lại</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM users WHERE id='$user_id'";
                        $users_run = mysqli_query($con, $users);

                        if (mysqli_num_rows($users_run) > 0) {
                            foreach ($users_run as $user) {
                    ?>

                                <form action="code.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="fname" value="<?= $user['fname']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" name="lname" value="<?= $user['lname']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Địa chỉ Email</label>
                                            <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Mật khẩu</label>
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Quyền truy cập</label>
                                            <select name="role_as" required class="form-control">
                                                <option value="">--Phân quyền--</option>
                                                <option value="2" <?= $user['role_as'] == '2' ? 'selected' : '' ?>>SuperAdmin</option>
                                                <option value="1" <?= $user['role_as'] == '1' ? 'selected' : '' ?>>Admin</option>
                                                <option value="0" <?= $user['role_as'] == '0' ? 'selected' : '' ?>>User</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Trạng thái</label>
                                            <input type="checkbox" name="status" <?= $user['status'] == '1' ? 'checked' : '' ?> width="70px" height="70px">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <button type="submit" name="update_user" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </div>

                                </form>

                            <?php
                            }
                        } else {
                            ?>
                            <h4>Không tìm thấy dữ liệu</h4>
                    <?php
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>