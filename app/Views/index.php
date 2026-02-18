<?=  $this->extend('layouts/main') ?>
<?= $this->Section("content")?>
 <?= view('pages/' . $page . '.php');?>
<?= $this->endSection("content")?>
