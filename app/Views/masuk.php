<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - GarudaNews</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="/css/main.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Inter:wght@400;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand mx-auto" href="/">GarudaNews</a>
        </div>
    </nav>
    <main>
        <section class="login">
            <div class="login-form">

                <h2>Masuk</h2>

                <?php if (session()->getFlashdata('msg')) : ?>
                <div class=" alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                    <input type="password" name="password" placeholder="Password" </div>
                    <button type="submit" class="btn-primary">Masuk</button>
                </form>
                <center>
                    <p>Belum punya akun? <a href="/register">Daftar disini</a></p>
                </center>
            </div>
        </section>
    </main>