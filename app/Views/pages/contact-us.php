
    <div class="icon_container">
      <a href="https://wa.me/919211241314" target="_blank" rel="noopener">
        <img
          src="<?= base_url()?>assets/images/whatsapp.png"
          alt="WhatsApp"
          class="whatsappIcon"
        />
      </a>
    </div>

    <section class="about_main_section">
      <div class="about_mains">
        <div class="about_images">
          <img src="<?= base_url()?>assets/images/contactbg.png" alt="about_image" />
        </div>
        <div class="about_head_content">
          <h3>Contact Us</h3>
          <img
            src="<?= base_url()?>assets/images/ellipse.png"
            class="main_ellipse"
            alt="ellipse"
          />
          <p>
            <a href="index.html">
              Home <i class="fa-solid fa-chevron-right"></i>
            </a>
            Contact Us
          </p>
        </div>
      </div>
    </section>

    <section class="about_class_main">
      <div class="mains_abouts_try">
        <div class="abouts_try_mains">
          <div class="about_left_sections">
            <div class="pandit_header_left">
              <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
              <h5>Contact Us</h5>
              <h3
                class="mains_con"
                style="font-weight: 700; line-height: 50px; font-size: 45px"
              >
                Have a Question ? <br />
                Let's Get in Touch With Us
              </h3>
              <div class="rects_images" style="margin-top: -5px">
                <img src="<?= base_url()?>assets/images/Rectangle.png" />
              </div>
              <p>
                Fill up the form and our team will get back to within 24 hrs
              </p>
              <form action="<?= base_url('contact-us') ?>" method="POST" id="contactForm">
                <?= csrf_field() ?>
              <div class="main_contact_us">
                <div class="main_contact_section">
                  <div class="main_con" style="margin-top: 15px">
                    <div class="main_con_input">
                      <label>First Name</label>
                      <input type="text" name="first_name" placeholder="Enter First Name" />
                    </div>
                    <div class="main_con_input">
                      <label>Last Name</label>
                      <input type="text" name="last_name" placeholder="Enter Last Name" />
                    </div>
                  </div>
                  <div class="main_con">
                    <div class="main_con_input email_con">
                      <label>E-mail</label>
                      <input type="text" name="email" placeholder="Enter Email ID" />
                    </div>
                  </div>
                  <div class="main_con">
                    <div class="main_con_input email_con">
                      <label>Subject</label>
                      <input type="text" name="subject" placeholder="Enter Subject" />
                    </div>
                  </div>

                  <div class="main_con">
                    <div class="main_con_input email_con">
                      <label>Messege</label>
                      <textarea name="message" placeholder="Type your Messege"></textarea>
                    </div>
                  </div>

                  <button
                    type="button"
                    onclick="submitContact()"
                    class="btn btn-primary submit_button read_more"
                  >
                    SUBMIT
                    <i class="fa-solid fa-arrow-right"></i>
                  </button>


                  <meta name="csrf-token" content="<?= csrf_hash() ?>">
                </div>
              </div>
              </form>
            </div>
          </div>
          <div class="about_right_section">
            <div class="about_right_image">
              <img src="<?= base_url()?>assets/images/rightsmain.png" alt="about_right" />
            </div>
            <div class="right_contents">
              <div class="rights_cont_updates">
                <div class="right_updates">
                  <label> Address </label>
                  <span> Gaur City 7th Avenue </span>
                  <p>D-77, Block-D Sector 63 Noida, Uttar Pradesh 201301</p>
                </div>
                <div class="right_updates">
                  <label>Email ID</label>
                  <p>pujaridekho@gmail.com</p>
                </div>
                <div class="right_updates">
                  <label>Phone Number</label>
                  <p>+ 91 9211241314</p>
                </div>
                <div class="right_updates_new">
                  <div class="social_icons">
                    <a
                      href="https://www.facebook.com/profile.php?id=61565781186435"
                      target="_blank"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a
                      href="https://www.instagram.com/pujaridekho/"
                      target="_blank"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a
                      href="https://www.youtube.com/@PujariDekho"
                      target="_blank"
                      ><i class="fa-brands fa-youtube"></i
                    ></a>
                    <a href="https://pujaridekho.com/" target="_blank"
                      ><i class="fa-brands fa-google-plus-g"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact_section_map">
      <div class="main_contact_map">
        <div class="main_locations">
          <div class="map_con">
            <iframe
              width="1320"
              height="540"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              id="gmap_canvas"
              src="https://maps.google.com/maps?width=1000&amp;height=520&amp;hl=en&amp;q=D77%20f01%20sector%2063%20noida%20%20+(Pujaridekho)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ></iframe>
            <a href="https://www.acadoo.de/leistungen/ghostwriter-doktorarbeit/"
              >Doktorarbeit schreiben Unterstützung</a
            >
          </div>
        </div>
      </div>
    </section>

    <section
      class="testomonials_section"
      style="background-image: url(assets/images/parallax1.png)"
    >
      <div class="mains_testominal">
        <div class="pandit_header_left_test">
          <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
          <h5>Testimonial</h5>
          <h3>Our Happy Clients</h3>
          <div class="rects_images" style="margin-top: -5px">
            <img src="<?= base_url()?>assets/images/Rectangle.png" />
          </div>
        </div>

        <div class="testomoinals_review">
          <div
            class="testomoials_carousel owl-carousel owl-carousel-A owl-theme"
            id="owl-carousel-D"
          >
            <div class="testominal_cards">
              <div class="testominal_img">
                <img src="<?= base_url()?>assets/images/Icon.png" alt="testo1" />
              </div>
              <div class="testominal_content">
                <h3>Ramesh Kumar</h3>
                <p>
                  "I had an amazing experience with Pujaridekho. The pandit they
                  provided was very knowledgeable and helped me perform the
                  rituals with ease. The puja items were of high quality and
                  delivered on time. I highly recommend Pujaridekho for anyone
                  looking to book pandits or puja services."
                </p>
                <div class="stars">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="testominal_cards">
              <div class="testominal_img">
                <img src="<?= base_url()?>assets/images/icon2.png" alt="testo1" />
              </div>
              <div class="testominal_content">
                <h3>Ramesh Kumar</h3>
                <p>
                  "I had an amazing experience with Pujaridekho. The pandit they
                  provided was very knowledgeable and helped me perform the
                  rituals with ease. The puja items were of high quality and
                  delivered on time. I highly recommend Pujaridekho for anyone
                  looking to book pandits or puja services."
                </p>
                <div class="stars">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="testominal_cards">
              <div class="testominal_img">
                <img src="<?= base_url()?>assets/images/icon3.png" alt="testo1" />
              </div>
              <div class="testominal_content">
                <h3>Ramesh Kumar</h3>
                <p>
                  "I had an amazing experience with Pujaridekho. The pandit they
                  provided was very knowledgeable and helped me perform the
                  rituals with ease. The puja items were of high quality and
                  delivered on time. I highly recommend Pujaridekho for anyone
                  looking to book pandits or puja services."
                </p>
                <div class="stars">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="news_letter">
      <div class="news_letter_main">
        <div class="news_letter_updates">
          <div class="new_letter_left">
            <h3>Subscribe Our Newsletter</h3>
            <p>
              "Stay Connected to Spiritual Bliss – Receive Exclusive Updates,
              Ritual Guides, and Special Offers Directly in Your Inbox!"
            </p>
          </div>
          <div class="news_leeter_right">
            <div class="news_letter_input">
              <input
                type="email"
                class="news_input"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter your email"
              />
              <button type="button" class="subscribe_btn">SUBSCRIBE</button>
            </div>
          </div>
        </div>
      </div>
    </section>