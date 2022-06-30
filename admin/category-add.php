<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php') ?>

            <div class="card">
                <div class="card-header">
                    <h4>Thêm thể loại
                        <a href="category-view.php" class="btn btn-danger float-end">Trở lại</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Tên</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Link (URL)</label>
                                <input type="text" name="slug" class="form-control" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Mô tả chi tiết</label>
                                <textarea name="description" id="summernote" class="form-control" required rows="4"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Tiêu đề</label>
                                <input type="text" name="meta_title" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Từ khóa chi tiết</label>
                                <textarea name="meta_description" class="form-control" required rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Từ khóa tìm kiếm</label>
                                <textarea name="meta_keyword" class="form-control" required rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Điều hướng trạng thái</label><br/>
                                <input type="checkbox" name="navbar_status" width="70px" height="70px">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Trạng thái</label><br/>
                                <input type="checkbox" name="status" width="70px" height="70px">
                            </div>

                            <div class="col-md-6 mb-3">
                                <button type="submit" name="category_add" class="btn btn-primary">Lưu thể loại</button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>