<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/login.css" />
  </head>
  <body>
    <main class="app">
      <section class="card">
        <!-- LEFT -->
        <div class="illustration">
          <div class="shapes">
            <div class="shape purple happy">
              <div class="eyes no-pupil"><span></span><span></span></div>
              <div class="mouth"></div>
            </div>

            <div class="shape dark">
              <div class="eyes dark-eyes"><span></span><span></span></div>
            </div>

            <!-- AMARILLO CON 2 OJOS -->
            <div class="shape yellow">
              <div class="eyes orange-eyes"><span></span><span></span></div>
              <span class="mouth big"></span>
            </div>

            <div class="shape orange">
              <div class="eyes orange-eyes"><span></span><span></span></div>
              <div class="mouth big"></div>
            </div>
          </div>
        </div>

        <!-- FORM -->
        <div class="form-container">
          <div class="form-box">
            <div class="header">
              <img src="<?= base_url() ?>/assets/images/logos.jpg" alt="Logo" class="logo" />
              <h1 id="formTitle">Welcome back!</h1>
              <p id="formSub">Please enter your details</p>
            </div>

            <!-- LOGIN FORM -->
            <form id="loginForm">
              <div class="field">
                <label>Email</label>
                <input type="email" placeholder="Enter your email" required />
              </div>

              <div class="field">
                <label>Password</label>
                <div class="password">
                  <input
                    id="password"
                    type="password"
                    placeholder="••••••••"
                    required
                  />
                  <button type="button" id="togglePassword">
                    <span class="material-icons-outlined">visibility</span>
                  </button>
                </div>
              </div>

              <div class="row">
                <label class="checkbox">
                  <input type="checkbox" /> Remember for 30 days
                </label>
                <a href="#">Forgot password?</a>
              </div>

              <button class="btn primary" type="button" onclick="login()">Log In</button>
            </form>

            <!-- SIGNUP FORM -->
            <form id="signupForm" style="display: none">
              <div class="field">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" required />
              </div>

              <div class="field">
                <label>Email</label>
                <input type="email" placeholder="Enter email" required />
              </div>

              <div class="field">
                <label>Password</label>
                <input type="password" placeholder="Create password" required />
              </div>

              <div class="field">
                <label>Confirm Password</label>
                <input
                  type="password"
                  placeholder="Confirm password"
                  required
                />
              </div>

              <button class="btn primary" type="button" onclick="signup()">Create Account</button>
            </form>

            <!-- SWITCH TEXT -->
            <p class="signup" id="switchText">
              Don’t have an account?
              <a href="#" id="showSignup">Sign Up</a>
            </p>
          </div>
        </div>
      </section>
    </main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
      /*  OJOS */
      const allEyes = document.querySelectorAll(".eyes span");
      const mouths = document.querySelectorAll(".mouth");

      const MAX_MOVE = 7;
      let eyesLocked = false;

      /* FOLLOW MOUSE */
      document.addEventListener("mousemove", (e) => {
        if (eyesLocked) return;

        allEyes.forEach((eye) => {
          const r = eye.getBoundingClientRect();
          const cx = r.left + r.width / 2;
          const cy = r.top + r.height / 2;

          const dx = e.clientX - cx;
          const dy = e.clientY - cy;
          const angle = Math.atan2(dy, dx);

          eye.style.transform = `
      translate(
        ${Math.cos(angle) * MAX_MOVE}px,
        ${Math.sin(angle) * MAX_MOVE}px
      )
    `;
        });
      });

      /*  PARPADEO */
      function blinkAll() {
        if (eyesLocked) return;

        gsap.to(allEyes, {
          scaleY: 0.15,
          duration: 0.1,
          yoyo: true,
          repeat: 1,
          ease: "power1.inOut",
          transformOrigin: "center",
        });
      }

      setInterval(blinkAll, 2600);

      /* FORM ELEMENTS */
      const emailInput = document.querySelector('input[type="email"]');
      const passwordInput = document.querySelector('input[type="password"]');
      const toggleBtn = document.querySelector(".password button");

      /*  EMAIL → BOCA ABIERTA
       */
      emailInput.addEventListener("input", () => {
        gsap.to(mouths, {
          scaleY: 1.6,
          scaleX: 1.2,
          duration: 0.15,
          transformOrigin: "center",
        });
      });

      /* cerrar boca al salir del email */
      emailInput.addEventListener("blur", () => {
        gsap.to(mouths, {
          scaleY: 1,
          scaleX: 1,
          duration: 0.2,
        });
      });

      /* PASSWORD → CERRAR BOCA */
      passwordInput.addEventListener("focus", () => {
        gsap.to(mouths, {
          scaleY: 1,
          scaleX: 1,
          duration: 0.2,
        });
      });

      /* VER PASSWORD */
      toggleBtn.addEventListener("click", () => {
        const showing = passwordInput.type === "password";
        passwordInput.type = showing ? "text" : "password";

        if (showing) {
          // activar modo "no quiero ver"
          eyesLocked = true;

          gsap.to(allEyes, {
            x: -MAX_MOVE * 1.2,
            y: 0,
            duration: 0.2,
          });
        } else {
          // volver a normal
          eyesLocked = false;

          gsap.to(allEyes, {
            x: 0,
            y: 0,
            duration: 0.25,
          });
        }
      });
      const showSignup = document.getElementById("showSignup");
      const loginForm = document.getElementById("loginForm");
      const signupForm = document.getElementById("signupForm");
      const formTitle = document.getElementById("formTitle");
      const formSub = document.getElementById("formSub");
      const switchText = document.getElementById("switchText");

      let signupMode = false;

      showSignup.addEventListener("click", (e) => {
        e.preventDefault();
        signupMode = !signupMode;

        if (signupMode) {
          loginForm.style.display = "none";
          signupForm.style.display = "block";
          formTitle.innerText = "Create Account";
          formSub.innerText = "Sign up to get started";
          switchText.innerHTML =
            'Already have an account? <a href="<?= base_url() ?>/user/login" id="showSignup">Login</a>';
        } else {
          loginForm.style.display = "block";
          signupForm.style.display = "none";
          formTitle.innerText = "Welcome back!";
          formSub.innerText = "Please enter your details";
          switchText.innerHTML =
            'Don’t have an account? <a href="#" id="showSignup">Sign Up</a>';
        }

        // reattach event
        document
          .getElementById("showSignup")
          .addEventListener("click", arguments.callee);
      });

      function signup() {
        formData = document.getElementById("signupForm").elements;
        if (
          formData[0].value &&
          formData[1].value &&
          formData[2].value &&
          formData[3].value
        ) {
          $.ajax({
            url: "<?= base_url() ?>/user-auth/signup",
            method: "POST",
            data: {
              name: formData[0].value,
              email: formData[1].value,
              password: formData[2].value,
              confirm_password: formData[3].value,
            },
            success: function (response) {
              alert(response.message);
              if (response.success) {
                window.location.href = "<?= base_url() ?>/user/login";
              }
            },
          });
        } else {
          alert("Please fill in all fields.");
        }
      }


      function login() {
        formData = document.getElementById("loginForm").elements;
        if (formData[0].value && formData[1].value) {
          $.ajax({
            url: "<?= base_url() ?>/user-auth/login",
            method: "POST",
            data: {
              email: formData[0].value,
              password: formData[1].value,
            },
            success: function (response) {
              alert(response.message);
              if (response.success) {
                window.location.href = "<?= base_url() ?>/user/dashboard";
              }
            },
          });
        } else {
          alert("Please fill in all fields.");
        }
      }
    </script>
  </body>
</html>
