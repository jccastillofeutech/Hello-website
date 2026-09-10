<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
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
        <div class="card-container">
            <?php foreach($users as $user): ?>
                <div class="card">
                    <img src="<?= base_url('images/profile-img/' . $user['image']) ?>" alt="<?= esc($user['name']) ?>">
                        <div class="content-card">
                            <h3><?php echo esc($user['username']) ?></h3>
                            <p><?php echo esc($user['name']) ?></p>
                            <p><?php echo esc($user['role']) ?></p>
                        </div>
                </div>
             <?php endforeach; ?>
        </div>
    </section>
</body>
</html>