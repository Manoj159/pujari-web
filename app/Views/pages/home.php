

    <div class="icon_container">
      <a href="https://wa.me/919211241314" target="_blank" rel="noopener">
        <img
          src="<?= base_url()?>assets/images/whatsapp.png"
          alt="WhatsApp"
          class="whatsappIcon"
        />
      </a>
    </div>
    <div class="mains_class_up_heads">
      <div class="header_sections_mains">
        <div
          class="container"
          style="background-image: url(<?= base_url()?>assets/images/Mask.png)"
        >
          <div class="left-section">
            <div
              class="owl-carousel owl-carousel-A owl-carousel-A owl-theme"
              id="owl-carousel-A"
            >
              <div class="item">
                <img src="<?= base_url()?>assets/images/img1.png" alt="img1" />
              </div>
              <div class="item">
                <img src="<?= base_url()?>assets/images/img2.png" alt="img2" />
              </div>
              <div class="item">
                <img src="<?= base_url()?>assets/images/img3.png" alt="img3" />
              </div>
              <div class="item">
                <img src="<?= base_url()?>assets/images/img4.png" alt="img4" />
              </div>
            </div>
          </div>

          <div class="right-section">
            <div class="content">
              <h1 class="main_head_pandit">
                NEED A PANDITJI
                <span class="highlight"
                  >FOR POOJA <span class="needs">NEEDS</span></span
                >
              </h1>
              <p>We get it solved for you!</p>
              <div class="buttons">
                <button class="btn bttns btn-primary" onclick="openbooking()">
                  <img
                    src="<?= base_url()?>assets/images/ico-pandit.png"
                    alt="icons"
                    style="width: 25px"
                  />
                  BOOK NOW
                </button>
                <button
                  class="btn bttns btn-secondary"
                  onclick="openconsultmodal()"
                >
                  <img
                    src="<?= base_url()?>assets/images/free.png"
                    alt="icons"
                    style="width: 25px"
                  />
                  CONSULTATION
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="about_home_section">
      <div class="about_homes">
        <div class="about_left">
          <div class="about_left_img">
            <img src="<?= base_url()?>assets/images/ableft.png" alt="ableft" />
          </div>
        </div>
        <div class="about_right">
          <div class="mains_check_abouts">
            <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
            <h3>About Us Pujaridekho</h3>
            <h1>Start Your Journey Here!</h1>
            <div class="rects_images">
              <img src="<?= base_url()?>assets/images/Rectangle.png" />
            </div>
            <p>
              We are your one-stop shop for booking pandits, puja, and puja
              items. Our platform makes it easy to find and book pandits for
              various rituals and ceremonies, order puja items, and book puja
              services from the comfort of your home. We offer a wide range of
              services to help you perform puja and other religious ceremonies
              with ease.
            </p>
          </div>

          <div class="service-card">
            <div class="service-header" onclick="toggleService(0)">
              <div class="service-icon">
                <img src="<?= base_url()?>assets/images/ab1.png" alt="service1" />
              </div>
              <div class="service-content">
                <h2 class="service-title">Book Pandits</h2>
              </div>
              <button class="toggle-btn">
                <span class="toggle-icon">⌄</span>
              </button>
            </div>
            <div class="service-details">
              <div class="details-content">
                <ul>
                  <li>
                    Our platform allows you to book pandits for various rituals
                    and ceremonies. Whether you need a pandit for a wedding, a
                    puja, or any other religious ceremony, we have got you
                    covered. We have a network of experienced and knowledgeable
                    pandits who can help you perform religious ceremonies with
                    ease.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="service-card">
            <div class="service-header" onclick="toggleService(1)">
              <div class="service-icon">
                <img src="<?= base_url()?>assets/images/ab2.png" alt="service1" />
              </div>
              <div class="service-content">
                <h2 class="service-title">Order Puja Items</h2>
              </div>
              <button class="toggle-btn">
                <span class="toggle-icon">⌄</span>
              </button>
            </div>
            <div class="service-details">
              <div class="details-content">
                <ul>
                  <li>
                    We offer a wide range of puja items that you can order
                    online. From idols and statues to incense sticks and puja
                    thalis...
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="service-card">
            <div class="service-header" onclick="toggleService(2)">
              <div class="service-icon">
                <img src="<?= base_url()?>assets/images/ab3.png" alt="service1" />
              </div>
              <div class="service-content">
                <h2 class="service-title">Book Puja Services</h2>
              </div>
              <button class="toggle-btn">
                <span class="toggle-icon">⌄</span>
              </button>
            </div>
            <div class="service-details">
              <div class="details-content">
                <ul>
                  <li>
                    We offer a range of puja services that you can book online.
                    Whether you need a puja for a special occasion or just want
                    to perform a puja at home...
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <a href="" class="btn btn-primary read_more">
            READ MORE
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </section>

    <section
      class="top_pandit_list"
      style="background-image: url(<?= base_url()?>assets/images/Union.png)"
    >
      <div class="mains_pandit_section">
        <div class="pandit_section_header">
          <div class="pandit_header_left">
            <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
            <h3>Top Pandits in your area</h3>
            <div class="rects_images" style="margin-top: -5px">
              <img src="<?= base_url()?>assets/images/Rectangle.png" />
            </div>
          </div>
          <div class="pandit_header_right">
            <a class="btn btn-secondary view_all">
              VIEW ALL
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="crausel_cards">
          <div
            class="pandit_cards_new owl-carousel owl-carousel-B owl-theme"
            id="owl-carousel-B"
          >
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pandit1.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Pandit Yadunandan Mishra</h3>
                <p class="pandit_description">
                  Pandit Yadunandan Mishra is a highly experienced Vedic scholar
                  specializing in Hindu rituals, astrology, and spiritual
                  guidance. With over 20 years of expertise, he has conducted
                  various ceremonies such as Griha Pravesh, Satyanarayan Puja,
                  Rudrabhishek, and Wedding rituals. Known for his deep
                  knowledge and devotion, he ensures a sacred and fulfilling
                  experience for devotees.
                </p>
                <button
                  class="btn btn-primary book_now"
                  onclick="openbooking()"
                  type="button"
                >
                  BOOK NOW
                </button>
              </div>
            </div>
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pandit2.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Acharya Pankaj Shatri</h3>
                <p class="pandit_description">
                  Acharya Pankaj Shastri is a highly respected and trusted
                  pandit with over 18 years of experience in conducting
                  traditional Hindu rituals and Vedic pujas. Renowned for his
                  composed demeanor, insightful guidance, and profound knowledge
                  of the scriptures, he brings clarity and spiritual depth to
                  every ceremony. His approach ensures that each ritual is not
                  only authentic but also deeply meaningful, helping individuals
                  and families strengthen their connection with their faith and
                  cultural roots.
                </p>
                <button
                  class="btn btn-primary book_now"
                  onclick="openbooking()"
                  type="button"
                >
                  BOOK NOW
                </button>
              </div>
            </div>
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pandit3.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Pandit Santosh Mishra</h3>
                <p class="pandit_description">
                  With over 12 years of experience, Pandit Santosh Mishra is a
                  dedicated and knowledgeable Vedic priest who specializes in a
                  wide range of Hindu rituals and ceremonies. His deep
                  understanding of ancient traditions, combined with his
                  commitment to performing every puja with authenticity, ensures
                  that each ceremony is conducted with the highest level of
                  sincerity, precision, and spiritual integrity.
                </p>
                <button
                  class="btn btn-primary book_now"
                  onclick="openbooking()"
                  type="button"
                >
                  BOOK NOW
                </button>
              </div>
            </div>
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pandit2.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Pandit Brijnandan Mishra</h3>
                <p class="pandit_description">
                  Pandit Brijnandan Mishra is a dedicated and highly experienced
                  pandit with over 10 years of experience in performing a wide
                  range of Hindu rituals. His expertise spans various Vedic and
                  traditional pujas, including life events and spiritual
                  ceremonies. Known for his authenticity and commitment to
                  tradition, he is a trusted choice for families seeking genuine
                  spiritual fulfillment.
                </p>
                <button
                  class="btn btn-primary book_now"
                  onclick="openbooking()"
                  type="button"
                >
                  BOOK NOW
                </button>
              </div>
            </div>

            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pandit2.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Pandit Anurag Pandey</h3>
                <p class="pandit_description">
                  Pandit Anurag Pandey is a highly trusted pandit with over 9
                  years of experience performing traditional Hindu rituals and
                  Vedic pujas. Known for his calm demeanor, clear explanations,
                  and deep knowledge of the scriptures, he ensures that every
                  ceremony is spiritually enriching and meaningful, helping
                  individuals and families connect deeply with their faith.
                </p>
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
        </div>
      </div>
    </section>

    <section
      class="video_section"
      style="background-image: url(<?= base_url()?>assets/images/mainvideo.png)"
    >
      <div class="video_section_main">
        <div class="videos_play">
          <img
            class="play_button"
            id="customPlayBtn"
            src="<?= base_url()?>assets/images/Playbutton.png"
            alt="Play Button"
          />
          <video
            class="main_plays"
            id="video1"
            controls
            controlsList="nodownload"
          >
            <source src="<?= base_url()?>assets/images/new_update.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </section>

    <section class="top_pandit_list">
      <div class="mains_pandit_section">
        <div class="pandit_section_header">
          <div class="pandit_header_left">
            <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
            <h3 class="poojas">Poojas and Homas</h3>
            <div class="rects_images" style="margin-top: -5px">
              <img src="<?= base_url()?>assets/images/Rectangle.png" />
            </div>
          </div>
          <div class="pandit_header_right">
            <a class="btn btn-secondary view_all">
              VIEW ALL
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="crausel_cards">
          <div class="pandit_cards_new carts_add_new">
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
                    <strong> Description:</strong> A grand worship of Goddess
                    Durga performed during the nine days of Navaratri to seek
                    blessings for strength, prosperity, and protection.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Kalash Sthapana, Durga Saptashati Path, Aarti, and Havan.
                  </p>
                  <p>
                    <strong>Best Time:</strong> Celebrated during the nine days
                    of Navaratri as per the Hindu calendar. Duration: 2-4 hours
                    (varies based on the rituals performed).
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
            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja3.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Vehicle puja/Car Puja</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A ritual to purify and bless
                    a new vehicle for safety and prosperity.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Ganesh Puja, Coconut Breaking, Swastik Marking, and Aarti.
                  </p>
                  <p>
                    <strong>Best Time:</strong> On an auspicious muhurat or any
                    new vehicle purchase.
                  </p>

                  <p><strong>Duration:</strong> 30-45 minutes.</p>
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

            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja5.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Griha Pravesh Puja</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A grand worship of Goddess
                    Durga performed during the nine days of Navaratri to seek
                    blessings for strength, prosperity, and protection.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Kalash Sthapana, Ganesh Puja, Navagraha Havan, and Vastu
                    Puja.
                  </p>
                  <p>
                    <strong>Best Time:</strong> On an auspicious tithi as per
                    the Hindu calendar.
                  </p>
                  <p><strong>Duration:</strong>2-3 hours.</p>
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
            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja6.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Maha Ganpati Homa</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A powerful puja dedicated to
                    Lord Ganesha for removing obstacles and granting success.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Ganesh Abhishek, Modak Offering, and Havan.
                  </p>
                  <p>
                    <strong>Best Time:</strong> Chaturthi or an auspicious
                    muhurat.
                  </p>
                  <p><strong>Duration:</strong>2-3 hours.</p>
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
            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja7.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Bhoomi Puja</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A traditional ritual
                    performed before starting any construction work to seek
                    blessings from Mother Earth.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Ganesh Puja, Kalash Puja, and Vastu Shanti.
                  </p>
                  <p>
                    <strong>Best Time:</strong> As per Vastu Shastra on an
                    auspicious muhurat.
                  </p>
                  <p><strong>Duration:</strong>2-3 hours.</p>
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
            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja8.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Office puja / Bussiness puja</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A sacred puja for business
                    success, growth, and protection from negative energies.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Ganesh Puja, Lakshmi Puja, and Navagraha Havan.
                  </p>
                  <p>
                    <strong>Best Time:</strong> During an auspicious muhurat.
                  </p>
                  <p><strong>Duration:</strong> 2-3 hours.</p>
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
            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja2.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Shradh Puja</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A sacred ritual performed to
                    honor and offer respect to ancestors, ensuring peace and
                    liberation for their souls.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Tarpan, Pind Daan, and Brahmin Bhojan.
                  </p>
                  <p>
                    <strong>Best Time:</strong> Performed during Pitru Paksha or
                    on the death anniversary (Tithi) of the departed soul.
                  </p>
                  <p><strong>Duration:</strong> 2-3 hours.</p>
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
            <div class="pandi_cards mains_cardss">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/pooja4.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3 class="pooja_names">Kuber Puja</h3>
                <div class="pandit_descriptions">
                  <p>
                    <strong> Description:</strong> A sacred ritual performed on
                    the night of Diwali to invite Goddess Lakshmi’s blessings
                    for wealth, prosperity, and happiness.
                  </p>

                  <p>
                    <strong>Includes:</strong>
                    Kalash Sthapana, Lakshmi-Ganesh Puja, Kuber Puja, and Deep
                    Daan.
                  </p>
                  <p>
                    <strong>Best Time:</strong>Performed during the Pradosh Kaal
                    and Nishita Kaal on Diwali night as per the Hindu calendar.
                  </p>
                  <p><strong>Duration:</strong> 1-2 hours.</p>
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
        </div>
      </div>
    </section>

    <section class="experts_section">
      <div class="experts_sections_new">
        <div class="experts_image">
          <div class="exp_img">
            <img class="desktop_bottom" src="<?= base_url()?>assets/images/bottom.png" />
            <img class="mobile_bottom" src="<?= base_url()?>assets/images/bottom_desk.png" />
          </div>
          <div class="exp_content">
            <p>
              "Book expert pandits for your puja effortlessly and make your
              rituals divine."
            </p>
            <button type="button" class="book_ecoer">BOOK NOW</button>
          </div>
        </div>
      </div>
    </section>

    <section
      class="top_pandit_list"
      style="background-image: url(<?= base_url()?>assets/images/Union.png)"
    >
      <div class="mains_pandit_section main_products_section">
        <div class="pandit_section_header cart_section_headers">
          <div class="pandit_header_left">
            <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
            <h3>Pooja Samagri</h3>
            <div class="rects_images" style="margin-top: -5px">
              <img src="<?= base_url()?>assets/images/Rectangle.png" />
            </div>
          </div>
          <div class="pandit_header_right">
            <a class="btn btn-secondary pooja_samagri view_all">
              VIEW ALL
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="crausel_cards">
          <div
            class="pandit_cards_new owl-carousel owl-carousel-C owl-theme"
            id="owl-carousel-C"
          >
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/cart1.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Product Name</h3>
                <p class="pandit_description_caret">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
                <div class="main_carts">
                  <div class="rupess">
                    <h3><span>&#8377;</span> 95.00</h3>
                    <p><span>&#8377;</span> 105.00</p>
                  </div>
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="addToCart('Product Name', 95, 'assets/images/cart1.png')"
                  >
                    <img
                      src="<?= base_url()?>assets/images/carti.png"
                      alt="icons"
                      style="width: 20px"
                    />
                    Add
                  </button>
                </div>
              </div>
            </div>
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/cart2.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Product Name</h3>
                <p class="pandit_description_caret">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
                <div class="main_carts">
                  <div class="rupess">
                    <h3><span>&#8377;</span> 95.00</h3>
                    <p><span>&#8377;</span> 105.00</p>
                  </div>
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="addToCart('Product Name', 95, 'assets/images/cart1.png')"
                  >
                    <img
                      src="<?= base_url()?>assets/images/carti.png"
                      alt="icons"
                      style="width: 20px"
                    />
                    Add
                  </button>
                </div>
              </div>
            </div>
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/cart3.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Product Name</h3>
                <p class="pandit_description_caret">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
                <div class="main_carts">
                  <div class="rupess">
                    <h3><span>&#8377;</span> 95.00</h3>
                    <p><span>&#8377;</span> 105.00</p>
                  </div>
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="addToCart('Product Name', 95, 'assets/images/cart1.png')"
                  >
                    <img
                      src="<?= base_url()?>assets/images/carti.png"
                      alt="icons"
                      style="width: 20px"
                    />
                    Add
                  </button>
                </div>
              </div>
            </div>
            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/cart4.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Product Name</h3>
                <p class="pandit_description_caret">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
                <div class="main_carts">
                  <div class="rupess">
                    <h3><span>&#8377;</span> 95.00</h3>
                    <p><span>&#8377;</span> 105.00</p>
                  </div>
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="addToCart('Product Name', 95, 'assets/images/cart1.png')"
                  >
                    <img
                      src="<?= base_url()?>assets/images/carti.png"
                      alt="icons"
                      style="width: 20px"
                    />
                    Add
                  </button>
                </div>
              </div>
            </div>

            <div class="pandi_cards">
              <div class="pandit_images">
                <img src="<?= base_url()?>assets/images/cart1.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
                </a>
              </div>
              <div class="pandit_content">
                <h3>Product Name</h3>
                <p class="pandit_description_caret">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
                <div class="main_carts">
                  <div class="rupess">
                    <h3><span>&#8377;</span> 95.00</h3>
                    <p><span>&#8377;</span> 105.00</p>
                  </div>
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="addToCart('Product Name', 95, 'assets/images/cart1.png')"
                  >
                    <img
                      src="<?= base_url()?>assets/images/carti.png"
                      alt="icons"
                      style="width: 20px"
                    />
                    Add
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Cart Overlay -->
      <div class="cart-overlay" id="cartOverlay" onclick="closeCart()"></div>
    </section>

    <div class="cart-sidebar" id="cartSidebar">
      <div class="cart-header">
        <h2>
          <i class="fas fa-shopping-bag"></i>
          My Cart
        </h2>
        <button class="close-cart" onclick="closeCart()">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="cart-items" id="cartItems">
        <div class="empty-cart">
          <i class="fas fa-shopping-cart"></i>
          <h3>Your cart is empty</h3>
          <p>Add some products to get started!</p>
        </div>
      </div>

      <div class="cart-summary" id="cartSummary" style="display: none">
        <div class="summary-row">
          <span>Subtotal:</span>
          <span id="subtotal">₹0.00</span>
        </div>
        <div class="summary-row">
          <span>Delivery:</span>
          <span id="delivery">₹50.00</span>
        </div>
        <div class="summary-row total">
          <span>Total:</span>
          <span id="total">₹0.00</span>
        </div>
        <button class="checkout-btn" onclick="checkout()">
          <i class="fas fa-lock"></i> Proceed to Checkout
        </button>
      </div>
    </div>
    <section class="mid_section_new">
      <div class="mid_section_news">
        <div class="sectiion_process">
          <div class="process_left">
            <img src="<?= base_url()?>assets/images/min_left.png" alt="midimg" />
          </div>
          <div class="process_right">
            <div class="pandit_header_left">
              <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
              <h5>How It works</h5>
              <h3 class="news_exp">What we do for you?</h3>
              <div class="rects_images" style="margin-top: -5px">
                <img src="<?= base_url()?>assets/images/Rectangle.png" />
              </div>
            </div>
            <div class="process_steps">
              <div class="step">
                <div class="step-icon">
                  <img src="<?= base_url()?>assets/images/step1.png" alt="step1" />
                </div>
                <div class="step-content">
                  <h2 class="step-title">Select a Puja</h2>
                  <p class="step_para">
                    Select a Puja along with the package of your choice.
                  </p>
                </div>
              </div>
              <div class="step">
                <div class="step-icon">
                  <img
                    src="<?= base_url()?>assets/images/step2.png"
                    class="step_again"
                    alt="step1"
                  />
                </div>
                <div class="step-content step_content_new">
                  <h2 class="step-title">Book a Pandit</h2>
                  <p class="step_para">
                    For Pandit Ji booking, Select your preference by language /
                    region.
                  </p>
                </div>
              </div>
              <div class="step">
                <div class="step-icon">
                  <img
                    src="<?= base_url()?>assets/images/step3.png"
                    class="step_again"
                    alt="step1"
                  />
                </div>
                <div class="step-content step_content_new">
                  <h2 class="step-title">Get your confirmation</h2>
                  <p class="step_para">
                    Book with advance payment and get a confirmed booking.
                  </p>
                </div>
              </div>
              <div class="step">
                <div class="step-icon">
                  <img
                    src="<?= base_url()?>assets/images/step4.png"
                    class="step_again"
                    alt="step1"
                  />
                </div>
                <div class="step-content step_content_new">
                  <h2 class="step-title">Get frequent updates</h2>
                  <p class="step_para">
                    Book with advance payment and get a confirmed booking.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="testomonials_section"
      style="background-image: url(<?= base_url()?>assets/images/parallax1.png)"
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