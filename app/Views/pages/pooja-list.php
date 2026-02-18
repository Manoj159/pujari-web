
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
          <img src="<?= base_url()?>assets/images/aboutmain.png" alt="about_image" />
        </div>
        <div class="about_head_content">
          <h3>Poooja List</h3>
          <img
            src="<?= base_url()?>assets/images/ellipse.png"
            class="main_ellipse"
            alt="ellipse"
          />
          <p>
            <a href="index.html">
              Home <i class="fa-solid fa-chevron-right"></i>
            </a>
            Poooja List
          </p>
        </div>
      </div>
    </section>

    <section class="blogs_cards_section">
      <div class="blogs_cards">
        <div class="pandi_cards mains_cardss">
          <div class="pandit_images">
            <img src="<?= base_url()?>assets/images/pooja1.png" alt="" />
          </div>
          <div class="card_widhlist">
            <a href="#" class="wishlist-icon"
              ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
            </a>
          </div>
          <div class="pandit_content">
            <h3 class="pooja_names">Navarati Durga puja</h3>
            <div class="pandit_descriptions">
              <p>
                <strong> Description:</strong> A grand worship of Goddess Durga
                performed during the nine days of Navaratri to seek blessings
                for strength, prosperity, and protection.
              </p>

              <p>
                <strong>Includes:</strong>
                Kalash Sthapana, Durga Saptashati Path, Aarti, and Havan.
              </p>
              <p>
                <strong>Best Time:</strong> Celebrated during the nine days of
                Navaratri as per the Hindu calendar. Duration: 2-4 hours (varies
                based on the rituals performed).
              </p>
            </div>

            <button
              class="btn btn-primary book_now"
              onclick="openbooking()"
              type="button"
            >
              BOOK NOW
            </button>
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