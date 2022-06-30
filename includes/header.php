<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>PHP Blog Website</title> -->
    <title>
        <?php if (isset($page_title)) {
            echo "$page_title";
        } else {
            echo "PHP Blog Website";
        } ?>
    </title>
    <meta name="description" content="
    <?php if (isset($meta_description)) {
        echo "$page_title";
    } ?>">
    <meta name="keywords" content="
    <?php if (isset($meta_keyword)) {
        echo "$page_title";
    } ?>">
    <meta name="author" content="Hoang Phi">

    <link href='<?= base_url('assets/images/favicon.ico') ?>' rel='shortcut icon' type='image/favicon.icon' />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>

<body>