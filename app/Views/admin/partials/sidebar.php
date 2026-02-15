<div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="index.html"
                  ><img src="<?= base_url()?>assets/admin/images/logo/logo.png" alt="Logo" srcset=""
                /></a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-item <?= ($page == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= base_url('admin/dashboard') ?>" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item <?= ($page == 'bookings') ? 'active' : '' ?>">
                <a href="<?= base_url('admin/bookings') ?>" class="sidebar-link">
                  <i class="bi bi-person-lines-fill"></i>
                  <span>Booking List</span>
                </a>
              </li>
              <li class="sidebar-item <?= ($page == 'orderhistory') ? 'active' : '' ?>">
                <a href="<?= base_url('admin/orderhistory') ?>" class="sidebar-link">
                  <i class="bi bi-person-lines-fill"></i>
                  <span>Order History</span>
                </a>
              </li>
              <li class="sidebar-item has-sub <?= ($page == 'pooja') ? 'active' : '' ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Pooja</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item <?= ($page == 'addpooja') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/addpooja') ?>">Add New Pooja</a>
                  </li>
                  <li class="submenu-item <?= ($page == 'poojalist') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/poojalist') ?>">Pooja List</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item has-sub <?= ($page == 'addblog' || $page == 'bloglist') ? 'active' : '' ?>">
                <a href="<?= base_url('admin/blog') ?>" class="sidebar-link">
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Blog</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item <?= ($page == 'addblog') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/addblog') ?>">Add New Blog</a>
                  </li>
                  <li class="submenu-item <?= ($page == 'bloglist') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/bloglist') ?>">Blog List</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub <?= ($page == 'addproduct' || $page == 'product') ? 'active' : '' ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-bag-plus-fill"></i>
                  <span>Products</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item <?= ($page == 'addproduct') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/addproduct') ?>">Add Product</a>
                  </li>
                  <li class="submenu-item <?= ($page == 'product') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/products') ?>">Our Product</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub <?= ($page == 'addpandit' || $page == 'pandits') ? 'active' : '' ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Our Pandit</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item <?= ($page == 'addpandit') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/addpandit') ?>">Upload New Pandit</a>
                  </li>
                  <li class="submenu-item <?= ($page == 'pandits') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/pandits') ?>">Pandit List</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub <?= ($page == 'addfaq' || $page == 'faqlist') ? 'active' : '' ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-question-circle"></i>
                  <span>FAQ</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item <?= ($page == 'addfaq') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/addfaq') ?>">Update FAQ</a>
                  </li>
                  <li class="submenu-item <?= ($page == 'faqlist') ? 'active' : '' ?>">
                    <a href="<?= base_url('admin/faqlist') ?>">FAQ List</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item <?= ($page == 'contact') ? 'active' : '' ?>">
                <a href="<?= base_url('admin/contacts') ?>" class="sidebar-link">
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Contact List</span>
                </a>
              </li>
                <li class="sidebar-item">
                <a href="<?= base_url('admin/logout') ?>" class="sidebar-link">
                  <i class="bi bi-person-lines-fill"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
          <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
          </button>
        </div>
      </div>