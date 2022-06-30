<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Tổng khóa học
                    <?php
                    $dash_category_query = "SELECT * FROM categories";
                    $dash_category_query_run = mysqli_query($con, $dash_category_query);
                    if ($category_total = mysqli_num_rows($dash_category_query_run)) {
                        echo '<h4 class="mb-0">' . $category_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">Không có dữ liệu</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="category-view.php">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Tổng bài Post
                    <?php
                    $dash_post_query = "SELECT * FROM posts";
                    $dash_post_query_run = mysqli_query($con, $dash_post_query);
                    if ($post_total = mysqli_num_rows($dash_post_query_run)) {
                        echo '<h4 class="mb-0">' . $post_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">Không có dữ liệu</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="post-view.php">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Tổng quyền truy cập
                    <?php
                    $dash_user_query = "SELECT * FROM users";
                    $dash_user_query_run = mysqli_query($con, $dash_user_query);
                    if ($user_total = mysqli_num_rows($dash_user_query_run)) {
                        echo '<h4 class="mb-0">' . $user_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">Không có dữ liệu</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view-register.php">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Tổng người sử dụng
                    <?php
                    $dash_user_block_query = "SELECT * FROM users WHERE status='1'";
                    $dash_user_block_query_run = mysqli_query($con, $dash_user_block_query);
                    if ($userBlock_total = mysqli_num_rows($dash_user_block_query_run)) {
                        echo '<h4 class="mb-0">' . $userBlock_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">Không có dữ liệu</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view-register.php">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>