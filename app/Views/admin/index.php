<?= $this->extend('admin/layouts/main') ?>


    <?= $this->section('pagecss') ?>
        <link
            rel="stylesheet"
            href="<?= base_url('assets/admin/css/pages/product.css') ?>"
        />
    <?= $this->endSection() ?>


<?= $this->section('content') ?>
    <?= view('admin/pages/' . $page) ?>
<?= $this->endSection() ?>

