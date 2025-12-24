
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
          <img src="<?= base_url()?>assets/images/poojadetails.png" alt="about_image" />
        </div>
        <div class="about_head_content">
          <h3>Bhoomi Pooja</h3>
          <img
            src="<?= base_url()?>assets/images/ellipse.png"
            class="main_ellipse"
            alt="ellipse"
          />
          <p>
            <a href="index.html">
              Home <i class="fa-solid fa-chevron-right"></i>
            </a>
            Bhoomi Pooja
          </p>
        </div>
      </div>
    </section>
    <section class="about_class_main">
      <div class="mains_abouts_try">
        <div class="abouts_try_mains">
          <div class="about_right_section">
            <!-- Main Image -->
            <div class="about_right_image pooja_details_img">
              <img id="mainImage" src="<?= base_url()?>assets/images/books.png" />
            </div>

            <!-- Slider Wrapper -->
            <div class="thumb_slider_wrapper">
              <!-- Left Arrow -->
              <button class="arrow_left" onclick="slideLeft()">
                <i class="fa-solid fa-chevron-left fa-shake"></i>
              </button>

              <!-- Thumbnails -->
              <div class="thumb_slider" id="thumbSlider">
                <img
                  src="<?= base_url()?>assets/images/pooja1.png"
                  onclick="changeImage(this)"
                />
                <img
                  src="<?= base_url()?>assets/images/pooja2.png"
                  onclick="changeImage(this)"
                />
                <img
                  src="<?= base_url()?>assets/images/pooja3.png"
                  onclick="changeImage(this)"
                />
                <img
                  src="<?= base_url()?>assets/images/pooja4.png"
                  onclick="changeImage(this)"
                />
                <img
                  src="<?= base_url()?>assets/images/pooja5.png"
                  onclick="changeImage(this)"
                />
                <img
                  src="<?= base_url()?>assets/images/pooja6.png"
                  onclick="changeImage(this)"
                />
              </div>

              <!-- Right Arrow -->
              <button class="arrow_right" onclick="slideRight()">
                <i class="fa-solid fa-chevron-right fa-shake"></i>
              </button>
            </div>
          </div>

          <div class="about_left_sections">
            <div class="pandit_header_left pooja_details_rr">
              <h3>Bhoomi Puja</h3>
              <h5 class="starts">Advantage of Bhoomi Puja</h5>
              <div class="mains_poojas_det">
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <p class="mains_ss">(0 customer reviews)</p>
              </div>
              <p class="para_nn">
                Bhoomi pooja is a ritual performed in honour of Goddess Bhoomi
                Vastu Purush (deity of directions). Bhoomi means Mother Earth.
                Hence, this pooja eradicates the ill effects & Vats Doshas in
                the land. Beginning prior to the construction of any structure,
                this smoothes out the process of construction.
              </p>
              <p class="para_nn bottom_nn">
                Bhumi pooja / pujan is a Hindu ritual performed in honour of
                Goddess Bhoomi or earth and Vastu Purush (the deity of
                directions), before beginning the construction of new house. The
                five elements of nature are also worshipped during the bhumi
                pujan, also known as Neev Pujan. Bhoomi means mother earth.
              </p>
              <div class="points_angle">
                <div class="pooja_price">
                  <h3>Price: ₹ 899.00</h3>
                </div>
                <div class="pooja_button">
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="openbooking()"
                  >
                    <img
                      src="<?= base_url()?>assets/images/carti.png"
                      alt="icons"
                      style="width: 20px"
                    />
                    Book Now
                  </button>
                  <button class="btn btn-primary wish_list" type="button">
                    <i class="fa-regular fa-heart"></i> ADD TO WISHLIST
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="pooja_all_details"
      style="background-image: url(assets/images/poojabackground.png)"
    >
      <div class="dots_new">
        <div class="image_dot">
          <img src="<?= base_url()?>assets/images/dots1.png" alt="dots" />
        </div>
      </div>
      <div class="pooja_des_container">
        <div class="pooja_des_tabs">
          <button class="pooja_des_tab pooja_des_active">Description</button>
          <button class="pooja_des_tab">Significance</button>
          <button class="pooja_des_tab">Faq's</button>
          <button class="pooja_des_tab">Reviews (0)</button>

          <div class="pooja_des_share_section">
            <span class="pooja_des_share_text">SHARE</span>
            <div class="pooja_des_social_icons">
              <a
                href="https://www.facebook.com/profile.php?id=61565781186435"
                target="_blank"
              >
                <img src="<?= base_url()?>assets/images/poojaf.png" alt="Facebook" />
              </a>
              <a href="">
                <img src="<?= base_url()?>assets/images/poojat.png" alt="Twitter" />
              </a>
              <a href="https://www.instagram.com/pujaridekho/" target="_blank">
                <img src="<?= base_url()?>assets/images/poojai.png" alt="LinkedIn" />
              </a>
            </div>
          </div>
        </div>

        <div class="pooja_des_content_wrapper">
          <div class="pooja_des_text_content">
            <h1>Puja Description</h1>
            <p>
              According to Hindu mythology, Mother Earth is considered as Hindu
              Goddess. Bhumi Puja is performed to Mother Earth and Vastu purusha
              who is the god of the direction and five forces of the nature. It
              is performed to remove all the evil forces surrounding the land
              and to ask for forgiveness for the trouble caused to the living
              beings who are in the land.
            </p>

            <h2>When to perform this Puja?</h2>
            <p>
              An auspicious date is finalized as per the Vastu time the date of
              birth of the land owners. The Hindu calendar months of Shravan,
              Kartik, Margshirsh and Paush are considered the most favourable
              months for this Puja
            </p>
          </div>

          <div class="pooja_des_image_content">
            <div class="pooja_des_ritual_setup">
              <div class="pooja_des_kalash"></div>
              <div class="pooja_des_offerings">
                <div class="pooja_des_flower"></div>
                <div class="pooja_des_flower"></div>
                <div class="pooja_des_flower"></div>
                <div class="pooja_des_flower"></div>
              </div>
              <div class="pooja_des_ritual_items">
                <div class="pooja_images_details">
                  <img src="<?= base_url()?>assets/images/poojanew.png" alt="Pooja Items" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="top_pandit_list">
      <div class="mains_pandit_section main_products_section">
        <div class="pandit_section_header cart_section_headers">
          <div class="pandit_header_left">
            <img src="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
            <h3>Affordable Pooja stuffs to buy</h3>
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