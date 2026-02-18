

    <header class="navbar">
      <div class="container-fluid">
        <div class="mains">
          <a class="navbar-brand" href="<?=  base_url('/') ?>">
            <img class="main-logo" src="<?= base_url()?>assets/images/logos.jpg" alt="Logo" />
          </a>
          <div class="mains-toggles-top">
            <div class="menu-icon" id="menuToggle" onclick="toggleMenu()">
              <img src="<?= base_url()?>assets/images/toggler-bar.png" />
            </div>
            <div
              class="menu-icon"
              id="headMenuToggle"
              onclick="toggleHeadMenu()"
            >
              <!-- <img src="<?= base_url()?>assets/images/head-toggle.png" /> -->
            </div>
          </div>
        </div>
        <nav class="navbar-collapse" id="navbarMain">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('about-us') ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=  base_url('blogs') ?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=  base_url('products') ?>">Product List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=  base_url('pooja-list') ?>">Pooja List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=  base_url('our-pandits') ?>">Pandit List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=  base_url('contact-us') ?>">Contact Us</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>