<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard - Pujari Dekho</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css" />
  </head>

  <body>
    <div class="dashboard">
      <!-- ========== Sidebar ========== -->
      <aside class="sidebar">
        <div class="logo">
          <img
            src="<?= base_url() ?>/assets/images/logos.jpg"
            style="width: 180px"
            alt="Pujari Dekho Logo"
          />
        </div>
        <ul>
          <li class="active" data-page="dashboard">
            <i class="fa fa-home"></i>
            <span>Dashboard</span>
          </li>
          <li data-page="profile"><i class="fa fa-user"></i> Profile</li>
          <li data-page="upcoming">
            <i class="fa fa-calendar"></i>
            <span>Upcoming Pooja</span>
          </li>
          <li data-page="completed">
            <i class="fa fa-check-circle"></i>
            <span>Completed Pooja</span>
          </li>
          <li data-page="cancel">
            <i class="fa fa-times-circle"></i>
            <span>Cancel Pooja</span>
          </li>
          <li data-page="orders">
            <i class="fa fa-receipt"></i>
            <span>Order History</span>
          </li>
          <li data-page="support">
            <i class="fa fa-headset"></i>
            <span>Support</span>
          </li>
        </ul>
      </aside>

      <!-- ========== Main Content ========== -->
      <div class="content">
        <!-- ========== Dashboard Page ========== -->
        <div class="page active" id="dashboard">
          <div class="page-header">
            <h1>Welcome Back! 🙏</h1>
            <p>Here's your pooja booking overview</p>
          </div>

          <div class="dashboard-cards">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Upcoming Pooja</div>
                <div class="card-icon upcoming">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
              <div class="card-count">2</div>
            </div>

            <div class="card">
              <div class="card-header">
                <div class="card-title">Completed Pooja</div>
                <div class="card-icon completed">
                  <i class="fa fa-check-circle"></i>
                </div>
              </div>
              <div class="card-count">5</div>
            </div>

            <div class="card">
              <div class="card-header">
                <div class="card-title">Cancelled</div>
                <div class="card-icon cancel">
                  <i class="fa fa-times-circle"></i>
                </div>
              </div>
              <div class="card-count">1</div>
            </div>

            <div class="card">
              <div class="card-header">
                <div class="card-title">Total Orders</div>
                <div class="card-icon orders">
                  <i class="fa fa-receipt"></i>
                </div>
              </div>
              <div class="card-count">8</div>
            </div>
          </div>

          <!-- Recent Activity -->
          <div class="page-header" style="margin-top: 40px">
            <h2 style="font-size: 24px">Recent Activity</h2>
          </div>

          <div class="table-container">
            <table class="order-table">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Puja Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>PD1024</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>11 Feb 2026</td>
                  <td>10:00 AM</td>
                  <td><strong>₹1,020</strong></td>
                  <td><span class="badge upcoming">Upcoming</span></td>
                </tr>
                <tr>
                  <td><strong>PD1023</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>10 Feb 2026</td>
                  <td>09:00 AM</td>
                  <td><strong>₹999</strong></td>
                  <td><span class="badge upcoming">Upcoming</span></td>
                </tr>
                <tr>
                  <td><strong>PD1022</strong></td>
                  <td>Satyanarayan Puja</td>
                  <td>05 Feb 2026</td>
                  <td>11:00 AM</td>
                  <td><strong>₹1,200</strong></td>
                  <td><span class="badge completed">Completed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Profile Page -->
        <div class="page" id="profile">
          <div class="page-header">
            <h1>My Profile</h1>
          </div>

          <div class="profile-card">
            <img src="https://via.placeholder.com/120" class="profile-img" />

            <h3>Prince Kushwah</h3>
            <p>prince@email.com</p>

            <div class="profile-details">
              <label>Phone</label>
              <input type="text" value="+91 98765 43210" />

              <label>City</label>
              <input type="text" value="Delhi" />

              <label>Address</label>
              <input type="text" value="Your Address" />
            </div>

            <button class="save-btn">Save Changes</button>
          </div>
        </div>

        <!-- ========== Upcoming Pooja Page ========== -->
        <div class="page" id="upcoming">
          <div class="page-header">
            <h1>Upcoming Pooja</h1>
            <p>Your scheduled pooja bookings</p>
          </div>

          <div class="table-container">
            <table class="order-table">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Image</th>
                  <th>Order ID</th>
                  <th>Puja Name</th>
                  <th>Booking Date</th>
                  <th>Time</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/E65100/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1023</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>10 Feb 2026</td>
                  <td>09:00 AM</td>
                  <td><strong>₹999</strong></td>
                  <td><span class="badge upcoming">Upcoming</span></td>
                  <td>
                    <span class="badge cancel" onclick="cancelPooja('PD1023')"
                      >Cancel</span
                    >
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/FF6F00/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1024</strong></td>
                  <td>Satyanarayan Puja</td>
                  <td>11 Feb 2026</td>
                  <td>10:00 AM</td>
                  <td><strong>₹1,020</strong></td>
                  <td><span class="badge upcoming">Upcoming</span></td>
                  <td>
                    <span class="badge cancel" onclick="cancelPooja('PD1024')"
                      >Cancel</span
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- ========== Completed Pooja Page ========== -->
        <div class="page" id="completed">
          <div class="page-header">
            <h1>Completed Pooja</h1>
            <p>Your successfully completed pooja bookings</p>
          </div>

          <div class="table-container">
            <table class="order-table">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Order ID</th>
                  <th>Puja Name</th>
                  <th>Booking Date</th>
                  <th>Time</th>
                  <th>Pandit Name</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><strong>PD1022</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>05 Feb 2026</td>
                  <td>09:00 AM</td>
                  <td>Pandit Ram Sharma</td>
                  <td><strong>₹1,200</strong></td>
                  <td><span class="badge completed">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><strong>PD1021</strong></td>
                  <td>Satyanarayan Puja</td>
                  <td>01 Feb 2026</td>
                  <td>11:00 AM</td>
                  <td>Pandit Vijay Kumar</td>
                  <td><strong>₹850</strong></td>
                  <td><span class="badge completed">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><strong>PD1020</strong></td>
                  <td>Ganesh Puja</td>
                  <td>28 Jan 2026</td>
                  <td>08:00 AM</td>
                  <td>Pandit Suresh Pandey</td>
                  <td><strong>₹650</strong></td>
                  <td><span class="badge completed">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><strong>PD1019</strong></td>
                  <td>Navgraha Shanti Puja</td>
                  <td>25 Jan 2026</td>
                  <td>10:30 AM</td>
                  <td>Pandit Ashok Tiwari</td>
                  <td><strong>₹1,500</strong></td>
                  <td><span class="badge completed">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><strong>PD1018</strong></td>
                  <td>Lakshmi Puja</td>
                  <td>20 Jan 2026</td>
                  <td>06:00 PM</td>
                  <td>Pandit Mohan Das</td>
                  <td><strong>₹750</strong></td>
                  <td><span class="badge completed">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- ========== Cancel Pooja Page ========== -->
        <div class="page" id="cancel">
          <div class="page-header">
            <h1>Cancelled Pooja</h1>
            <p>Your cancelled pooja bookings</p>
          </div>

          <div class="table-container">
            <table class="order-table">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Image</th>
                  <th>Order ID</th>
                  <th>Puja Name</th>
                  <th>Booking Date</th>
                  <th>Time</th>
                  <th>Amount</th>
                  <th>Cancel Reason</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/C62828/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1017</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>15 Jan 2026</td>
                  <td>09:00 AM</td>
                  <td><strong>₹999</strong></td>
                  <td>Pandit not available</td>
                  <td><span class="badge cancel">Cancelled</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- ========== Order History Page ========== -->
        <div class="page" id="orders">
          <div class="page-header">
            <h1>Order History</h1>
            <p>Complete history of all your orders</p>
          </div>

          <div class="table-container">
            <table class="order-table">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Image</th>
                  <th>Order ID</th>
                  <th>Puja Name</th>
                  <th>Booking Date</th>
                  <th>Time</th>
                  <th>Amount</th>
                  <th>Payment</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/FF6F00/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1024</strong></td>
                  <td>Satyanarayan Puja</td>
                  <td>11 Feb 2026</td>
                  <td>10:00 AM</td>
                  <td><strong>₹1,020</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge upcoming">Upcoming</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/E65100/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1023</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>10 Feb 2026</td>
                  <td>10:00 AM</td>
                  <td><strong>₹999</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge upcoming">Upcoming</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/2E7D32/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1022</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>05 Feb 2026</td>
                  <td>09:00 AM</td>
                  <td><strong>₹1,200</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge delivered">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/2E7D32/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1021</strong></td>
                  <td>Satyanarayan Puja</td>
                  <td>01 Feb 2026</td>
                  <td>11:00 AM</td>
                  <td><strong>₹850</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge delivered">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/2E7D32/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1020</strong></td>
                  <td>Ganesh Puja</td>
                  <td>28 Jan 2026</td>
                  <td>08:00 AM</td>
                  <td><strong>₹650</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge delivered">Completed</span></td>
                  <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/2E7D32/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1019</strong></td>
                  <td>Navgraha Shanti Puja</td>
                  <td>25 Jan 2026</td>
                  <td>10:30 AM</td>
                  <td><strong>₹1,500</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge delivered">Completed</span></td>
                   <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/2E7D32/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1018</strong></td>
                  <td>Lakshmi Puja</td>
                  <td>20 Jan 2026</td>
                  <td>06:00 PM</td>
                  <td><strong>₹750</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge delivered">Completed</span></td>
                   <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <img
                      src="https://via.placeholder.com/60x60/C62828/ffffff?text=Pooja"
                      class="order-img"
                      alt="Pooja"
                    />
                  </td>
                  <td><strong>PD1017</strong></td>
                  <td>Griha Pravesh Pooja</td>
                  <td>15 Jan 2026</td>
                  <td>09:00 AM</td>
                  <td><strong>₹999</strong></td>
                  <td><span class="badge paid">Paid</span></td>
                  <td><span class="badge cancel">Cancelled</span></td>
                   <td>
                    <a href="order-details.html" class="view-btn">
                      <i class="fa fa-eye"></i> View
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- ========== Support Page ========== -->
        <div class="page" id="support">
          <div class="page-header">
            <h1>Customer Support</h1>
            <p>We're here to help! Submit your query below</p>
          </div>

          <form class="support-form" onsubmit="submitSupport(event)">
            <div class="row">
              <div>
                <label>Name *</label>
                <input
                  type="text"
                  name="name"
                  placeholder="Enter your name"
                  required
                />
              </div>
              <div>
                <label>Email *</label>
                <input
                  type="email"
                  name="email"
                  placeholder="example@email.com"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div>
                <label>Phone Number *</label>
                <input
                  type="tel"
                  name="phone"
                  placeholder="+91 XXXXX XXXXX"
                  required
                />
              </div>
              <div>
                <label>Order ID (Optional)</label>
                <input
                  type="text"
                  name="orderId"
                  placeholder="Enter Order ID (e.g., PD1023)"
                />
              </div>
            </div>

            <label>Issue Type *</label>
            <select name="issueType" required>
              <option value="">-- Select Issue Type --</option>
              <option value="payment">Payment Issue</option>
              <option value="not-completed">Pooja Not Completed</option>
              <option value="pandit">Pandit Issue</option>
              <option value="cancellation">Booking Cancellation</option>
              <option value="refund">Refund Request</option>
              <option value="reschedule">Reschedule Request</option>
              <option value="other">Other</option>
            </select>

            <label>Message *</label>
            <textarea
              name="message"
              rows="5"
              placeholder="Please describe your issue in detail..."
              required
            ></textarea>

            <label>Attachment (Optional)</label>
            <input type="file" name="attachment" accept="image/*,.pdf" />

            <button type="submit" class="support-btn">
              <i class="fa fa-paper-plane"></i> Submit Request
            </button>
          </form>
        </div>
      </div>
    </div>

    <script>
   const menuItems = document.querySelectorAll(".sidebar ul li");
const pages = document.querySelectorAll(".page");

menuItems.forEach((item) => {
  item.addEventListener("click", () => {
    // remove active
    menuItems.forEach((i) => i.classList.remove("active"));
    pages.forEach((p) => p.classList.remove("active"));

    // add active
    item.classList.add("active");
    const pageId = item.dataset.page;
    document.getElementById(pageId).classList.add("active");

    // save active page in localStorage
    localStorage.setItem("activePage", pageId);

    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const savedPage = localStorage.getItem("activePage");

  if (savedPage) {
    // remove default active
    document.querySelectorAll(".sidebar ul li").forEach(i => i.classList.remove("active"));
    document.querySelectorAll(".page").forEach(p => p.classList.remove("active"));

    // activate saved page
    document.querySelector(`[data-page="${savedPage}"]`).classList.add("active");
    document.getElementById(savedPage).classList.add("active");
  }

  // animation code (existing)
  const cards = document.querySelectorAll(".card");
  cards.forEach((card, index) => {
    setTimeout(() => {
      card.style.opacity = "0";
      card.style.transform = "translateY(20px)";
      setTimeout(() => {
        card.style.transition = "all 0.5s ease";
        card.style.opacity = "1";
        card.style.transform = "translateY(0)";
      }, 50);
    }, index * 100);
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const savedPage = localStorage.getItem("activePage") || "dashboard";

  // remove all active
  document.querySelectorAll(".sidebar ul li").forEach(i => i.classList.remove("active"));
  document.querySelectorAll(".page").forEach(p => p.classList.remove("active"));

  // activate saved page immediately
  const menu = document.querySelector(`[data-page="${savedPage}"]`);
  const page = document.getElementById(savedPage);

  if (menu && page) {
    menu.classList.add("active");
    page.classList.add("active");
  }
});

    </script>
  </body>
</html>
