    <footer class="footer_section">
      <div class="container_footer">
        <div class="main_footers">
          <!-- Footer Left -->
          <div class="footer_left">
            <div class="footer_logo">
              <img src="<?= base_url()?>assets/images/footer_logo.png" alt="Pujaridekho Logo" />
            </div>
            <p class="footer_para">
              Pujaridekho.com is your trusted platform for booking experienced
              pandits and accessing a wide range of Hindu religious services.
              From performing pujas to providing puja samagri, we ensure a
              seamless spiritual experience tailored to your needs.
            </p>
            <div class="social_icons">
              <a
                href="https://www.facebook.com/profile.php?id=61565781186435"
                target="_blank"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
              <a href="https://www.instagram.com/pujaridekho/" target="_blank"
                ><i class="fa-brands fa-instagram"></i
              ></a>
              <a href="https://www.youtube.com/@PujariDekho" target="_blank"
                ><i class="fa-brands fa-youtube"></i
              ></a>
              <a href="https://pujaridekho.com/" target="_blank"
                ><i class="fa-brands fa-google-plus-g"></i
              ></a>
            </div>
          </div>
          <!-- Useful Links -->
          <div class="footer_section">
            <h3>Pandit Ji Near Me</h3>
            <div class="footer_line">
              <img src="<?= base_url()?>assets/images/footerline.png" alt="line" />
            </div>
            <ul class="footer_links">
              <li><a href="<?=  base_url('pandit-greater') ?>">Pandit Ji Greater Noida</a></li>
              <li><a href="<?=  base_url('pandit-greater') ?>?>">Pandit Ji Sector 62 Noida</a></li>
            </ul>
          </div>
          <!-- Useful Links -->
          <div class="footer_section">
            <h3>Useful Links</h3>
            <div class="footer_line">
              <img src="<?= base_url()?>assets/images/footerline.png" alt="line" />
            </div>
            <ul class="footer_links">
              <li><a href="<?= base_url('about-us') ?>">About Us</a></li>
              <li><a href="<?= base_url('products') ?>">Product List</a></li>
              <li><a href="<?= base_url('pooja-list') ?>">Pooja List</a></li>
              <li><a href="<?= base_url('our-pandits') ?>">Pandit List</a></li>
              <li><a href="<?= base_url('contact-us') ?>">Contact Us</a></li>
            </ul>
          </div>

          <!-- Company -->
          <div class="footer_section">
            <h3>Company</h3>
            <div class="footer_line">
              <img src="<?= base_url()?>assets/images/footerline.png" alt="line" />
            </div>
            <ul class="footer_links">
              <li><a href="<?= base_url('disclaimer') ?>">Disclaimer</a></li>
              <li><a href="<?= base_url('faq') ?>">FAQ's</a></li>
              <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
              <li><a href="<?= base_url('terms-and-conditions') ?>">Terms & Conditions</a></li>
            </ul>
          </div>

          <!-- Get In Touch -->
          <div class="footer_section">
            <h3>Get In Touch</h3>
            <div class="footer_line">
              <img src="<?= base_url()?>assets/images/footerline.png" alt="line" />
            </div>
            <div class="contact_info">
              <div class="contact_item">
                <div class="contact_icon">
                  <img
                    src="<?= base_url()?>assets/images/footerloc.png"
                    class="footer_location"
                    alt="location"
                  />
                </div>
                <div class="contact_text">
                  <p>
                    F01, 1st Floor D-77, Block-D Sector 63 Noida, Uttar Pradesh
                    201301
                  </p>
                </div>
              </div>
              <div class="contact_item">
                <div class="contact_icon">
                  <img src="<?= base_url()?>assets/images/footercall.png" alt="call" />
                </div>
                <div class="contact_text">
                  <p>Contact Us: +91 9211241314</p>
                </div>
              </div>
              <div class="contact_item">
                <div class="contact_icon">
                  <img src="<?= base_url()?>assets/images/footermail.png" alt="email" />
                </div>
                <div class="contact_text">
                  <p>pujaridekho@gmail.com</p>
                </div>
              </div>
            </div>
            <div
              class="scroll_top"
              onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            >
              <i class="fa-solid fa-chevron-up"></i>
            </div>
          </div>
        </div>

        <div class="bottom_footer">
          <p>© 2024 Pujari Dekho, All Rights Reserved Revised</p>
        </div>
      </div>
    </footer>
     <div class="subscription-modal" id="bokkingmodal" style="display: none">
      <div class="subscription-modal-dialog">
        <div class="subscription-modal-content">
          <div class="subscription-modal-header">
            <h2 class="subscription-modal-title">Book a Puja</h2>
          </div>
          <div class="straight-line">
            <img src="<?= base_url()?>assets/images/linesss.png" alt="" style="width: 100%" />
          </div>
          <span class="subscription-close-icon" onclick="closebooking()"
            >✕</span
          >
          <div class="subscription-modal-body">
            <form id="trialForm" method="post" action="">
              <div class="subscription-form-group">
                <label for="username" class="subscription-label">
                  Enter Your Name</label
                >
                <img
                  src="<?= base_url()?>assets/images/subuser.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="text"
                  id="trial_username"
                  placeholder="Enter full name"
                  class="subscription-input"
                  name="name"
                  required
                />
              </div>

              <div class="subscription-form-group">
                <label for="contact" class="subscription-label">
                  Enter Mobile Number</label
                >
                <img
                  src="<?= base_url()?>assets/images/submobile.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="number"
                  id="trial_email"
                  class="subscription-input"
                  onchange="checkEmail()"
                  placeholder="Enter your mobile number"
                  name="number"
                  required
                />
              </div>

              <div class="subscription-form-group">
                <label for="mobile" class="subscription-label"
                  >Enter Your Email</label
                >
                <img
                  src="<?= base_url()?>assets/images/subemail.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="email"
                  id="trial_mobile"
                  placeholder="Enter your email"
                  class="subscription-input"
                  name="email"
                  required
                />
              </div>
              <div class="subscription-form-group">
                <label for="examType" class="subscription-label"
                  >Type of Puja</label
                >
                <img
                  src="<?= base_url()?>assets/images/subexam.png"
                  alt="User"
                  class="subs-icons"
                />
                <select
                  id="trial_examType"
                  class="subscription-select"
                  name="plan_id"
                  required
                  onchange="toggleOtherPujaField()"
                >
                  <option value="">Select Puja</option>
                  <option value="Griha Pravesh Puja">
                    Griha Pravesh Puja (New & Rented)
                  </option>
                  <option value="Office & Business Puja">
                    Office & Business Puja
                  </option>
                  <option value="Bhoomi Puja">Bhoomi Puja</option>
                  <option value="Vasakal Puja">
                    Vasakal (Main Door Frame) Puja
                  </option>
                  <option value="Rudrabhishek Puja">Rudrabhishek Puja</option>
                  <option value="Satyanarayan Puja">Satyanarayan Puja</option>
                  <option value="Maha Ganapati Homa">Maha Ganapati Homa</option>
                  <option value="Marriage Puja">Marriage Puja</option>
                  <option value="Engagement Puja">Engagement Puja</option>
                  <option value="Pre-Wedding & Haldi Ceremony Puja">
                    Pre-Wedding & Haldi Ceremony Puja
                  </option>
                  <option value="Marriage Anniversary Puja">
                    Marriage Anniversary Puja
                  </option>
                  <option value="Birthday Puja">Birthday Puja</option>
                  <option value="other">Other...</option>
                </select>
              </div>

              <!-- Other Puja Name field, initially hidden -->
              <div
                class="subscription-form-group"
                id="otherPujaNameField"
                style="display: none"
              >
                <label for="username" class="subscription-label"
                  >Other Puja Name</label
                >
                <img
                  src="<?= base_url()?>assets/images/subuser.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="text"
                  id="trial_username"
                  placeholder="Enter puja name"
                  class="subscription-input"
                  name="name"
                />
              </div>

              <div class="subscription-form-group">
                <label for="address" class="subscription-label">Location</label>
                <img
                  src="<?= base_url()?>assets/images/subaddress.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="text"
                  id="trial_address"
                  class="subscription-textarea"
                  placeholder="Enter your full address"
                  name="address"
                  rows="2"
                  required
                />
              </div>

              <div class="subscription-form-group">
                <label for="username" class="subscription-label">Date</label>
                <img
                  src="<?= base_url()?>assets/images/subemail.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="date"
                  id="trial_date"
                  class="subscription-input"
                  name="Date"
                  required
                />
              </div>
              <div>
                <button
                  class="coupon-otp new-otp"
                  id="sendtOtpButton"
                  type="button"
                  onclick="validateForm()"
                >
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="subscription-modal" id="Consultantmodal" style="display: none">
      <div class="subscription-modal-dialog">
        <div class="subscription-modal-content">
          <div class="subscription-modal-header">
            <h2 class="subscription-modal-title">Book Free Consultant</h2>
          </div>
          <div class="straight-line">
            <img src="<?= base_url()?>assets/images/linesss.png" alt="" style="width: 100%" />
          </div>
          <span class="subscription-close-icon" onclick="closeconsultmodal()"
            >✕</span
          >
          <div class="subscription-modal-body">
            <form id="trialForm" method="post" action="">
              <div class="subscription-form-group">
                <label for="username" class="subscription-label">
                  Enter Your Name</label
                >
                <img
                  src="<?= base_url()?>assets/images/subuser.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="text"
                  id="trial_username"
                  placeholder="Enter full name"
                  class="subscription-input"
                  name="name"
                  required
                />
              </div>

              <div class="subscription-form-group">
                <label for="contact" class="subscription-label">
                  Enter Mobile Number</label
                >
                <img
                  src="<?= base_url()?>assets/images/submobile.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="number"
                  id="trial_email"
                  class="subscription-input"
                  onchange="checkEmail()"
                  placeholder="Enter your mobile number"
                  name="number"
                  required
                />
              </div>

              <div class="subscription-form-group">
                <label for="mobile" class="subscription-label"
                  >Enter Your Email</label
                >
                <img
                  src="<?= base_url()?>assets/images/subemail.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="email"
                  id="trial_mobile"
                  placeholder="Enter your email"
                  class="subscription-input"
                  name="email"
                  required
                />
              </div>
              <!-- Date of Birth -->
              <div class="subscription-form-group">
                <label for="username" class="subscription-label"
                  >Date of Birth</label
                >
                <img
                  src="<?= base_url()?>assets/images/subemail.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="date"
                  id="trial_date"
                  class="subscription-input"
                  name="Date"
                  required
                  onchange="validateDateOfBirth()"
                />
                <span id="dob-error" class="error-message" style="display: none"
                  >Date of Birth cannot be in the future!</span
                >
              </div>

              <!-- Birth Timing -->
              <div class="subscription-form-group">
                <label for="address" class="subscription-label"
                  >Birth Timing</label
                >
                <img
                  src="<?= base_url()?>assets/images/subexam.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="text"
                  id="trial_timing"
                  class="subscription-textarea"
                  placeholder="Enter your birth time (HH:MM)"
                  name="timing"
                  required
                  onchange="validateBirthTiming()"
                />
                <span
                  id="timing-error"
                  class="error-message"
                  style="display: none"
                  >Please enter a valid time in the format HH:MM</span
                >
              </div>

              <div class="subscription-form-group">
                <label for="address" class="subscription-label"
                  >Birth Timing</label
                >
                <img
                  src="<?= base_url()?>assets/images/subexam.png"
                  alt="User"
                  class="subs-icons"
                />
                <input
                  type="text"
                  id="trial_address"
                  class="subscription-textarea"
                  placeholder="Enter your full address"
                  name="address"
                  rows="2"
                  required
                />
              </div>

              <div>
                <button
                  class="coupon-otp new-otp"
                  id="sendtOtpButton"
                  type="button"
                  onclick="validateForm()"
                >
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Load jQuery and plugins first -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Then load local main script which depends on jQuery and Owl Carousel -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
  </body>
</html>
