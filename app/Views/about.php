<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav>
        <div class="logo">Hello!</div>
        <div class="nav">
            <a href="<?php echo site_url('/')?>" class="nav-link">Home</a>
            <a href="<?php echo site_url('about')?>" class="nav-link">About</a>
            <a href="<?php echo site_url('customers')?>" class="nav-link">Customers</a>
            <a href="<?php echo site_url('users')?>" class="nav-link">Users</a>
        </div>
    </nav>
    <section class="hero">
        <div class="container-hero">
            <div class="colleft">
                <h1>About Us</h1>
                <p>We built this website for people to enjoy and know basic profiles.</p>
            </div>
            <div class="colright">
                <img src="<?= base_url('images/image2.png') ?>" alt="about-illus" class="img-hero">
            </div>
        </div>
    </section>
</body>
</html>