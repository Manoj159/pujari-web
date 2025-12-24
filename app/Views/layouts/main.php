<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->renderSection('meta') ?>

    <title><?= $this->renderSection('title') ?: esc($siteName ?? 'Site') ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href= "<?=  base_url() ?>/assets/css/app.css">
    <?= $this->renderSection('styles') ?>
</head>
<body>

    <?= $this->include('partials/header') ?>

    <main role="main" class="container">
        <?= $this->renderSection('content') ?>
    </main>


    <?= $this->include('partials/footer') ?>

    <!-- Scripts -->
    <script src="<?=  base_url() ?>/assets/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Then load local main script which depends on jQuery and Owl Carousel -->
    <script src="<?=  base_url() ?>assets/js/main.js"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>