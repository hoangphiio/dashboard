<?php
include('includes/config.php');
if (isset($_GET['title'])) {
    $slug = mysqli_real_escape_string($con, $_GET['title']);

    $category = "SELECT id, slug, meta_title, meta_description, meta_keyword FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
    $category_run = mysqli_query($con, $category);

    if (mysqli_num_rows($category_run) > 0) {
        $categoryItem = mysqli_fetch_array($category_run);
        $page_title = $categoryItem['meta_title'];
        $meta_description =  $categoryItem['meta_description'];
        $meta_keywords =  $categoryItem['meta_keyword'];
    } else {
        $page_title = "Category Page";
        $meta_description = "Category Page description bloggin website";
        $meta_keywords = "php, html, css, laravel, codeigniter, reactjs";
    }
} else {
    $page_title = "Category Page";
    $meta_description = "Category Page description bloggin website";
    $meta_keywords = "php, html, css, laravel, codeigniter, reactjs";
}
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <?php
                if (isset($_GET['title'])) {
                    $slug = mysqli_real_escape_string($con, $_GET['title']);

                    $category = "SELECT id, slug FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
                    $category_run = mysqli_query($con, $category);

                    if (mysqli_num_rows($category_run) > 0) {
                        $categoryItem = mysqli_fetch_array($category_run);
                        $category_id = $categoryItem['id'];

                        $posts = "SELECT category_id, name, slug, created_at FROM posts WHERE category_id='$category_id' AND status='0' ";
                        $posts_run = mysqli_query($con, $posts);

                        if (mysqli_num_rows($posts_run) > 0) {
                            foreach ($posts_run as $postItems) {
                ?>
                                <a href="<?= base_url('post/' . $postItems['slug']); ?>" class="text-decoration-none">
                                    <div class="card card-body shadow-sm mb-4">
                                        <h5><?= $postItems['name']; ?></h5>
                                        <div>
                                            <label class="text-dark me-2">Posted On: <?= date('d-M-Y', strtotime($postItems['created_at'])); ?></label>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                        } else {
                            ?>
                            <h4>B??i Post kh??ng c?? s???n</h4>
                        <?php
                        }
                    } else {
                        ?>
                        <h4>Kh??ng t??m th???y kh??a h???c</h4>
                    <?php
                    }
                } else {
                    ?>
                    <h4>Kh??ng t??m th???y ???????ng d???n</h4>
                <?php
                }
                ?>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Qu???ng c??o</h4>
                    </div>
                    <div class="card-body">
                        <h4>I Love Ti</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>