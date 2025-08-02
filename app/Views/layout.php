<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Website Responsif</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <h1>My Website</h1>
    </header>

    <nav>
        <a href="<?= base_url('profil') ?>">Profil</a>
        <a href="<?= base_url('skill') ?>">Skill</a>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> My Website</p>
    </footer>

</body>

</html>