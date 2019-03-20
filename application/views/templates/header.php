<!DOCTYPE html>
<html>
<head>
    <title>ciBlog</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
</head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>

<!-- Navbar -->
<body>
    <nav class=" container navbar navbar-dark navbar-expand-lg bg-info mb-4">
        <div class="container">
            <div class="navbar-header">
                <a href="<?php echo base_url(); ?>" class="navbar-brand">ciBlog</a>
            </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                </ul>
        </div>
    </nav>

    <div class="container">
