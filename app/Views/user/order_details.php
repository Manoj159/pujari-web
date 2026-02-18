<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Details - Pujari Dekho</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito', sans-serif;
      }

      body {
        background: linear-gradient(135deg, #fff5f0 0%, #ffe8dc 100%);
        min-height: 100vh;
      }

      .dashboard {
        display: flex;
        min-height: 100vh;
      }

      /* ========== Sidebar Styles ========== */
      .sidebar {
        width: 260px;
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
        padding: 0;
        position: fixed;
        height: 100vh;
        overflow-y: auto;
      }

      .logo {
        padding: 25px 20px;
        text-align: start;
        border-bottom: 2px solid #f0f0f0;
        background: #fff;
      }

      .logo img {
        width: 180px;
      }

      .sidebar ul {
        list-style: none;
        padding: 20px 15px;
      }

      .sidebar ul li {
        padding: 14px 18px;
        margin-bottom: 8px;
        cursor: pointer;
        border-radius: 10px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 15px;
        color: #555;
        font-weight: 500;
      }

      .sidebar ul li i {
        width: 20px;
        font-size: 16px;
      }

      .sidebar ul li:hover {
        background-color: #fff3e0;
        color: #E65100;
        transform: translateX(5px);
      }

      .sidebar ul li.active {
        background: linear-gradient(135deg, #E65100 0%, #FF6F00 100%);
        color: #fff;
        box-shadow: 0 4px 12px rgba(230, 81, 0, 0.3);
      }

      .sidebar ul li.active i {
        color: #fff;
      }

      /* ========== Content Area ========== */
      .content {
        flex: 1;
        margin-left: 260px;
        padding: 30px 40px;
      }

      /* ========== Page Header ========== */
      .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
      }

      .page-header h1 {
        font-size: 32px;
        color: #333;
        font-weight: 700;
      }

      .action-buttons {
        display: flex;
        gap: 12px;
      }

      .btn {
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }

      .btn-primary {
        background: linear-gradient(135deg, #E65100 0%, #FF6F00 100%);
        color: #fff;
        box-shadow: 0 4px 12px rgba(230, 81, 0, 0.3);
      }

      .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(230, 81, 0, 0.4);
      }

      .btn-outline {
        background: #fff;
        color: #E65100;
        border: 2px solid #E65100;
      }

      .btn-outline:hover {
        background: #E65100;
        color: #fff;
      }

      /* ========== Booking Card ========== */
      .booking-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      }

      .section-title {
        font-size: 20px;
        font-weight: 700;
        color: #333;
        margin: 30px 0 20px;
        padding-left: 15px;
        border-left: 4px solid #E65100;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .section-title:first-child {
        margin-top: 0;
      }

      .section-title i {
        color: #E65100;
        font-size: 22px;
      }

      /* ========== Details Grid ========== */
      .details-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 10px;
      }

      .detail-item {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        padding: 18px;
        border-radius: 12px;
        border: 1px solid #f0f0f0;
        transition: all 0.3s ease;
      }

      .detail-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      }

      .detail-label {
        font-size: 13px;
        color: #777;
        margin-bottom: 8px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
      }

      .detail-value {
        font-size: 16px;
        font-weight: 600;
        color: #333;
      }

      .detail-item.full {
        grid-column: span 3;
      }

      /* ========== Status Badge ========== */
      .status {
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: #e8f5e9;
        color: #2e7d32;
      }

      .status.confirmed {
        background: #e8f5e9;
        color: #2e7d32;
      }

      .status.pending {
        background: #fff3e0;
        color: #f57c00;
      }

      .status.cancelled {
        background: #ffebee;
        color: #c62828;
      }

      /* ========== Responsive Design ========== */
      @media (max-width: 992px) {
        .details-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .detail-item.full {
          grid-column: span 2;
        }
      }

      @media (max-width: 768px) {
        .sidebar {
          width: 70px;
        }

        .sidebar ul li span {
          display: none;
        }

        .logo img {
          width: 50px;
        }

        .content {
          margin-left: 70px;
          padding: 20px;
        }

        .details-grid {
          grid-template-columns: 1fr;
        }

        .detail-item.full {
          grid-column: span 1;
        }

        .page-header {
          flex-direction: column;
          align-items: flex-start;
          gap: 15px;
        }

        .action-buttons {
          width: 100%;
          flex-direction: column;
        }

        .btn {
          width: 100%;
          justify-content: center;
        }
      }
    </style>
  </head>

  <body>
    <div class="dashboard">
      <!-- ========== Sidebar ========== -->
      <aside class="sidebar">
        <div class="logo">
          <img src="/assets/images/logos.jpg" alt="Pujari Dekho Logo">
        </div>
        <ul>
          <li data-page="dashboard">
            <i class="fa fa-home"></i>
            <span>Dashboard</span>
          </li>
          <li data-page="profile">
            <i class="fa fa-user"></i>
            <span>Profile</span>
          </li>
          <li data-page="upcoming">
            <i class="fa fa-calendar"></i>
            <span>Upcoming Pooja</span>
          </li>
          <li class="active" data-page="completed">
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
        <div class="page-header">
          <h1>Booking Details</h1>
          
        </div>

        <div class="booking-card">
          <div class="section-title">
            <i class="fa fa-info-circle"></i>
            Booking Information
          </div>
          <div class="details-grid">
            <div class="detail-item">
              <div class="detail-label">Booking ID</div>
              <div class="detail-value">PDK-1023</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Booking Date</div>
              <div class="detail-value">10 January 2026</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Status</div>
              <div class="detail-value">
                <span class="status confirmed">Confirmed</span>
              </div>
            </div>
          </div>

          <div class="section-title">
            <i class="fa fa-user"></i>
            Customer Details
          </div>
          <div class="details-grid">
            <div class="detail-item">
              <div class="detail-label">Name</div>
              <div class="detail-value">Rahul Gupta</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Mobile</div>
              <div class="detail-value">+91 98765 43210</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Email</div>
              <div class="detail-value">rahul@gmail.com</div>
            </div>
          </div>

          <div class="section-title">
            <i class="fa fa-om"></i>
            Puja & Pujari Details
          </div>
          <div class="details-grid">
            <div class="detail-item">
              <div class="detail-label">Puja Name</div>
              <div class="detail-value">Griha Pravesh Puja</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Pujari</div>
              <div class="detail-value">Pandit Anil Mishra</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Language</div>
              <div class="detail-value">Hindi / Sanskrit</div>
            </div>
          </div>

          <div class="section-title">
            <i class="fa fa-calendar-alt"></i>
            Schedule & Location
          </div>
          <div class="details-grid">
            <div class="detail-item">
              <div class="detail-label">Puja Date</div>
              <div class="detail-value">15 January 2026</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Time Slot</div>
              <div class="detail-value">09:00 AM – 12:00 PM</div>
            </div>
            <div class="detail-item full">
              <div class="detail-label">Address</div>
              <div class="detail-value">Sector 62, Noida, Uttar Pradesh</div>
            </div>
          </div>

          <div class="section-title">
            <i class="fa fa-credit-card"></i>
            Payment Details
          </div>
          <div class="details-grid">
            <div class="detail-item">
              <div class="detail-label">Puja Amount</div>
              <div class="detail-value">₹3,500</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Service Charge</div>
              <div class="detail-value">₹300</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Total Paid</div>
              <div class="detail-value">₹3,800</div>
            </div>
            <div class="detail-item">
              <div class="detail-label">Payment Mode</div>
              <div class="detail-value">Online (UPI)</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>