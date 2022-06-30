<?php
include('includes/config.php');

$page_title = "Home Page";
$meta_description = "Home page description bloggin website";
$meta_keywords = "php, html, css, laravel, codeigniter, reactjs";

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-white">Hoàng Phi</h3>
                <div class="underline"></div>
            </div>

            <?php
            $homeCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 12";
            $homeCategory_run = mysqli_query($con, $homeCategory);

            if (mysqli_num_rows($homeCategory_run) > 0) {
                foreach ($homeCategory_run as $homeCateItem) {
            ?>
                    <div class="col-md-3 mb-4">
                        <a href="category.php?title=<?= $homeCateItem['slug']; ?>" class="text-decoration-none">
                            <div class="card card-body">
                                <?= $homeCateItem['name']; ?>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-d ark">Giới thiệu về khóa học</h3>
                <div class="underline"></div>
                <p>Chương Trình Dành Cho Người Đi Làm Và Sinh Viên. Lớp Học Nhỏ 100% Giáo Viên Nước Ngoài. Tư Vấn Miễn Phí. Lịch Học Linh Hoạt. Đến Tư Vấn Được Nhận Quà! Tặng Thêm Tháng Học. Free Kiểm Tra Trình Độ. Tháng 12 Học 4 Được 6.</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-dark">Bài Post trước đó</h3>
                <div class="underline"></div>
                <?php
                $homePosts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 12";
                $homePosts_run = mysqli_query($con, $homePosts);

                if (mysqli_num_rows($homeCategory_run) > 0) {
                    foreach ($homeCategory_run as $homePostItem) {
                ?>
                        <div class="mb-4">
                            <a href="category.php?title=<?= $homePostItem['slug']; ?>" class="text-decoration-none">
                                <div class="card card-body bg-light">
                                    <?= $homePostItem['name']; ?>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Liên lạc với chúng tôi</h4>
                    </div>
                    <div class="card-body">
                        <p>Email: nvhoangphi0905@gmail.com</p>
                        <p>Số điện thoại: 0903873915</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>