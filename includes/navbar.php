<div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?= base_url('assets/images/anhbia.png') ?>" class="w-100">
            </div>
            <div class="col-md-9">

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow sticky-top">
    <div class="container">
        <a class="navbar-brand d-block d-sm-none d-md-none" href="index.php"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('index.php') ?>">Trang chủ</a>
                </li>
                <?php
                $navbarCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0'";
                $navbarCategory_run = mysqli_query($con, $navbarCategory);

                if (mysqli_num_rows($navbarCategory_run) > 0) {
                    foreach ($navbarCategory_run as $navItems) {
                ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url('category/' . $navItems['slug']) ?>"><?= $navItems['name']; ?></a>
                            <!-- <a href="category.php?title=<?= $navItems['slug']; ?>" class="nav-link text-white"><?= $navItems['name']; ?></a> -->
                        </li>
                <?php
                    }
                }
                ?>

                <?php if (isset($_SESSION['auth_user'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('admin/index.php') ?>">Dasboard</a></li>
                            <form action="<?= base_url('allcode.php') ?>" method="POST">
                                <button type="submit" name="logout_btn" class="dropdown-item">
                                    Đăng xuất
                                </button>
                            </form>
                    </li>
            </ul>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login.php') ?>">Đăng nhập</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('register.php') ?>">Đăng ký</a>
            </li>
        <?php endif; ?>
        </ul>

        </div>
    </div>
</nav>