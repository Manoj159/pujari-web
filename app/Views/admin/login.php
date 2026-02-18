<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Pujari Dekho</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(
          135deg,
          #8b4513 0%,
          #d2691e 50%,
          #cd853f 100%
        );
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
      }

      .main-container {
        width: 100%;
        max-width: 1000px;
      }

      .login-wrapper {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        display: grid;
        grid-template-columns: 1fr 1fr;
        min-height: 600px;
      }

      /* Left Side - Form */
      .form-section {
        padding: 60px 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #fff;
      }

      .logo-section {
        margin-bottom: 40px;
        text-align: center;
      }

      .logo-section img {
        max-width: 120px;
        height: auto;
        margin-bottom: 10px;
      }

      .logo-section h1 {
        font-size: 24px;
        color: #8b4513;
        font-weight: 700;
        letter-spacing: 1px;
      }

      .admin-badge {
        display: inline-block;
        background: linear-gradient(135deg, #d2691e, #cd853f);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        margin-top: 10px;
        letter-spacing: 0.5px;
      }

      h2 {
        font-size: 32px;
        color: #333;
        margin-bottom: 10px;
        font-weight: 700;
      }

      .subtitle {
        color: #666;
        font-size: 14px;
        margin-bottom: 35px;
      }

      .form-group {
        margin-bottom: 25px;
      }

      .form-group label {
        display: block;
        color: #333;
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 14px;
        letter-spacing: 0.3px;
      }

      .form-group input {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e8e8e8;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f9f9f9;
      }

      .form-group input:focus {
        outline: none;
        border-color: #d2691e;
        background: white;
        box-shadow: 0 0 0 3px rgba(210, 105, 30, 0.1);
      }

      .error-message {
        color: #e74c3c;
        font-size: 12px;
        margin-top: 6px;
        display: none;
        font-weight: 500;
      }

      .error-message.show {
        display: block;
      }

      .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        font-size: 13px;
      }

      .remember-forgot label {
        display: flex;
        align-items: center;
        margin: 0;
        font-weight: 500;
        cursor: pointer;
      }

      .remember-forgot input[type="checkbox"] {
        margin-right: 8px;
        width: 16px;
        height: 16px;
        cursor: pointer;
      }

      .remember-forgot a {
        color: #d2691e;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
      }

      .remember-forgot a:hover {
        color: #8b4513;
        text-decoration: underline;
      }

      .login-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #d2691e 0%, #8b4513 100%);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(210, 105, 30, 0.3);
      }

      .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(210, 105, 30, 0.4);
      }

      .login-btn:active {
        transform: translateY(0);
      }

      .success-message {
        background: #d5f4e6;
        color: #27ae60;
        padding: 12px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 13px;
        display: none;
        border-left: 4px solid #27ae60;
      }

      .success-message.show {
        display: block;
      }

      /* Right Side - Info */
      .info-section {
        background: linear-gradient(
          135deg,
          #8b4513 0%,
          #d2691e 50%,
          #cd853f 100%
        );
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 60px 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
      }

      .info-section::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -100px;
        right: -100px;
      }

      .info-section::after {
        content: "";
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        bottom: -50px;
        left: -50px;
      }

      .info-content {
        position: relative;
        z-index: 1;
      }

      .info-icon {
        font-size: 60px;
        margin-bottom: 20px;
      }

      .info-section h2 {
        color: white;
        font-size: 36px;
        margin-bottom: 15px;
      }

      .info-section p {
        font-size: 15px;
        opacity: 0.95;
        line-height: 1.6;
        margin-bottom: 10px;
      }

      .divider {
        width: 60px;
        height: 3px;
        background: rgba(255, 255, 255, 0.3);
        margin: 20px auto;
      }

      /* Mobile Responsive */
      @media (max-width: 768px) {
        .login-wrapper {
          grid-template-columns: 1fr;
          min-height: auto;
        }

        .form-section {
          padding: 40px 30px;
        }

        .info-section {
          padding: 40px 30px;
          min-height: 250px;
        }

        .logo-section img {
          max-width: 100px;
        }

        h2 {
          font-size: 28px;
        }

        .info-section h2 {
          font-size: 28px;
        }
      }

      /* Loading animation */
      .loading {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 0.8s linear infinite;
      }

      @keyframes spin {
        to {
          transform: rotate(360deg);
        }
      }

      .login-btn.loading {
        pointer-events: none;
        opacity: 0.7;
      }
    </style>
  </head>
  <body>
    <div class="main-container">
      <div class="login-wrapper">
        <!-- Left Section - Login Form -->
        <div class="form-section">
          <div class="logo-section">
            <h1>🙏 पुजारी देखो</h1>
            <span class="admin-badge">ADMIN PANEL</span>
          </div>
          <h2>Admin Login</h2>
          <p class="subtitle">
            Enter your credentials to access the admin dashboard
          </p>

          <div class="success-message" id="successMsg"></div>

          <form id="adminLoginForm" method="post" onsubmit="<?= base_url('admin/login') ?>">
            <div class="form-group">
              <label for="adminEmail">Email Address</label>
              <input
                type="email"
                id="adminEmail"
                name="username"
                placeholder="admin@pujaridekho.com"
                required
              />
              <span class="error-message" id="emailError"></span>
            </div>

            <div class="form-group">
              <label for="adminPassword">Password</label>
              <input
                type="password"
                id="adminPassword"
                name="password"
                placeholder="Enter your password"
                required
              />
              <span class="error-message" id="passwordError"></span>
            </div>

            <div class="remember-forgot">
              <label>
                <input type="checkbox" id="rememberMe" />
                Remember me
              </label>
             
              <a href="#">Forgot Password?</a>
    
            </div>

            <button type="button" onclick="handleAdminLogin(event)" class="login-btn" id="loginBtn">
              Sign In to Dashboard
            </button>
          </form>

          <div
            style="
              text-align: center;
              margin-top: 30px;
              color: #999;
              font-size: 12px;
            "
          >
            <p>
              For security purposes, only authorized administrators can access
              this panel.
            </p>
          </div>
        </div>

        <!-- Right Section - Info -->
        <div class="info-section">
          <div class="info-content">
            <div class="info-icon">👨‍💼</div>
            <h2>Welcome Back!</h2>
            <div class="divider"></div>
            <p>
              Manage pandits, bookings, and services from your secure admin
              dashboard.
            </p>
            <p style="margin-top: 25px; font-size: 14px; opacity: 0.85">
              🔒 Your account is protected with enterprise-grade security
            </p>
          </div>
        </div>
      </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
      // Demo credentials
      const ADMIN_EMAIL = "admin@pujaridekho.com";
      const ADMIN_PASSWORD = "admin@2024";

function handleAdminLogin(e) {
  e.preventDefault();

  const email = document.getElementById("adminEmail").value.trim();
  const password = document.getElementById("adminPassword").value.trim();
  const loginBtn = document.getElementById("loginBtn");
  const rememberMe = document.getElementById("rememberMe").checked;

  clearErrors();

  let hasError = false;

  // Validation
  if (!email) {
    showError("emailError", "Email is required");
    hasError = true;
  } else if (!isValidEmail(email)) {
    showError("emailError", "Please enter a valid email");
    hasError = true;
  }

  if (!password) {
    showError("passwordError", "Password is required");
    hasError = true;
  } else if (password.length < 6) {
    showError("passwordError", "Password must be at least 6 characters");
    hasError = true;
  }

  if (hasError) return;

  // Loading state
  loginBtn.disabled = true;
  loginBtn.innerHTML = '<span class="loading"></span> Processing...';

  const form = document.getElementById("adminLoginForm");
  const formData = new FormData(form);

  $.ajax({
    type: "POST",
    url: '<?= base_url()?>auth/admin-login/',
    data: formData,
    processData: false,
    contentType: false,
    dataType: "json", // IMPORTANT
    success: function (res) {
      if (res.status === "success") {
        if (rememberMe) {
          localStorage.setItem("adminRemember", email);
        }

        showSuccess("Login successful! Redirecting...");
        window.location.href = "/admin/dashboard";
      } else {
        showError("emailError", res.message || "Invalid email or password");
        resetLoginButton(loginBtn);
      }
    },
    error: function () {
      showError("emailError", "Server error. Please try again.");
      resetLoginButton(loginBtn);
    },
  });
}
        function clearErrors() {
            document.getElementById("emailError").textContent = "";
            document.getElementById("emailError").classList.remove("show");
            document.getElementById("passwordError").textContent = "";
            document.getElementById("passwordError").classList.remove("show");
        }
        function resetLoginButton(button) {
        button.disabled = false;
        button.textContent = "Sign In to Dashboard";
      }
      function showError(elementId, message) {
        const errorEl = document.getElementById(elementId);
        errorEl.textContent = message;
        errorEl.classList.add("show");
      }

      function showSuccess(message) {
        const successEl = document.getElementById("successMsg");
        successEl.textContent = message;
        successEl.classList.add("show");
      }

      function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      }

      function resetForm() {
        document.getElementById("adminLoginForm").reset();
        document.getElementById("loginBtn").disabled = false;
        document.getElementById("loginBtn").textContent =
          "Sign In to Dashboard";
        document.getElementById("successMsg").classList.remove("show");
      }

      // Load remembered email on page load
      window.addEventListener("load", () => {
        const remembered = localStorage.getItem("adminRemember");
        if (remembered) {
          document.getElementById("adminEmail").value = remembered;
          document.getElementById("rememberMe").checked = true;
        }
      });
    </script>
  </body>
</html>
