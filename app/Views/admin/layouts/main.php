<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - pujaridekho Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <?= $this->renderSection('pagecss') ?>
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/css/bootstrap.css" />

    <link rel="stylesheet" href="<?= base_url()?>assets/admin/css/pages/product.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/vendors/iconly/bold.css" />

    <link
      rel="stylesheet"
      href="<?= base_url()?>assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="<?= base_url()?>assets/admin/vendors/bootstrap-icons/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/css/app.css" />
    <link
      rel="shortcut icon"
      href="<?= base_url()?>assets/admin/images/favicon.svg"
      type="image/x-icon"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />
  </head>

  <body>
    <div id="app">
      <?= $this->include('admin/partials/sidebar'); ?>

      <div id="main">
        <?= $this->renderSection('content') ?>

        <?= $this->include('admin/partials/footer'); ?>
      </div>
    </div>
    <script src="<?= base_url()?>assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url()?>assets/admin/vendors/apexcharts/apexcharts.js"></script>
    <script>
      var options = {
        // ... other options
        fill: {
          colors: ["#FF4560"], // Single color for all fills
        },
      };
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url()?>assets/admin/js/pages/dashboard.js"></script>
    <script src="<?= base_url()?>assets/admin/js/main.js"></script>


  </body>
</html>
