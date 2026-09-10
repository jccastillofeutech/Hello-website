<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav>
        <div class="logo">Hello!</div>
        <div class="nav">
            <a href="<?php echo site_url('home')?>" class="nav-link">Home</a>
            <a href="<?php echo site_url('about')?>" class="nav-link">About</a>
            <a href="<?php echo site_url('customers')?>" class="nav-link">Customers</a>
            <a href="<?php echo site_url('users')?>" class="nav-link">Users</a>
        </div>
    </nav>
    <section class="hero">
        <div class="container-hero">
            <div class="colleft">
                <h1>Welcome and Hello!</h1>
                <p>Get started on meeting fellow people and knowing their profile.</p>
                <a href="<?php echo site_url('about')?>" class="start">Get Started</a>
            </div>
            <div class="colright">
                <img src="<?= base_url('images/image1.png') ?>" alt="home-illus" class="img-hero">
            </div>
        </div>
    </section>
</body>
</html>