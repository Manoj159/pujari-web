    <div class="icon_container">
      <a href="https://wa.me/919211241314" target="_blank" rel="noopener">
        <img
          src ="<?= base_url()?>assets/images/whatsapp.png"
          alt="WhatsApp"
          class="whatsappIcon"
        />
      </a>
    </div>

    <section class="about_main_section">
      <div class="about_mains">
        <div class="about_images">
          <img src ="<?= base_url()?>assets/images/poojadetails.png" alt="about_image" />
        </div>
        <div class="about_head_content">
          <h3><?= $pooja['name'] ?></h3>
          <img
            src ="<?= base_url()?>assets/images/ellipse.png"
            class="main_ellipse"
            alt="ellipse"
          />
          <p>
            <a href="index.html">
              Home <i class="fa-solid fa-chevron-right"></i>
            </a>
            <?= $pooja['name'] ?>
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
              <img id="mainImage" src ="<?= base_url()?>/uploads/poojas/<?= $pooja['images'][0]['image_path'] ?>" />
            </div>

            <!-- Slider Wrapper -->
            <div class="thumb_slider_wrapper">
              <!-- Left Arrow -->
              <button class="arrow_left" onclick="slideLeft()">
                <i class="fa-solid fa-chevron-left fa-shake"></i>
              </button>

              <!-- Thumbnails -->
              <div class="thumb_slider" id="thumbSlider">
                <?php foreach ($pooja['images'] as $image): ?>
                <img
                  src ="<?= base_url()?>/uploads/poojas/<?= $image['image_path'] ?>"
                  onclick="changeImage(this)"
                />
              <?php endforeach; ?>
                
              </div>

              <!-- Right Arrow -->
              <button class="arrow_right" onclick="slideRight()">
                <i class="fa-solid fa-chevron-right fa-shake"></i>
              </button>
            </div>
          </div>

          <div class="about_left_sections">
            <div class="pandit_header_left pooja_details_rr">
              <h3><?= $pooja['name'] ?></h3>
              <h5 class="starts">Advantage of <?= $pooja['name'] ?></h5>
              <div class="mains_poojas_det">
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <div class="star">&#9733;</div>
                <p class="mains_ss">(<?= rand(10, 100) ?> customer reviews)</p>
              </div>
              <p class="para_nn">
                <?= $pooja['pooja_description'] ?>
              </p>

              <div class="samagri_section">
  <h5 class="samagri_title">Samagri Included?</h5>

  <div class="samagri_radio_group">
    <label>
      <input
        type="radio"
        name="samagri_included"
        value="yes"
        onclick="toggleSamagri(true)"
      />
      Yes
    </label>

    <label>
      <input
        type="radio"
        name="samagri_included"
        value="no"
        onclick="toggleSamagri(false)"
        checked
      />
      No
    </label>
  </div>

  <!-- Samagri List -->
  <div id="samagriListBox" class="samagri_list_box" style="display:none;">
    <h6>Samagri Items Included:</h6>
      <h4 class="samgri_price">Samagri Price: ₹ <?= $pooja['samagri_price'] ?></h4>
    <ul class="samagri_list">
      <?php
        if (!empty($pooja['samagri_list'])) {
          $samagriItems = explode(',', $pooja['samagri_list']);
          foreach ($samagriItems as $item) {
            echo "<li>" . trim($item) . "</li>";
          }
        } else {
          echo "<li>No samagri items listed.</li>";
        }
          ?>
      </ul>
  </div>
</div>
<div class="pooja_prices">
  <div class="pooja_price">
    <h3>Market Price</h3>
<h3>    <del>₹ <?= $pooja['market_price'] ?></del></h3>
  </div>

  <div class="pooja_price pujari_prices">
    <h3>Pujari Dekho Offer Price</h3>
    <h3>₹ <?= $pooja['price'] ?></h3>
    <div class="price_saved">
    You save ₹ <?= $pooja['market_price'] - $pooja['price'] ?> (<?= round((($pooja['market_price'] - $pooja['price']) / $pooja['market_price']) * 100, 2) ?>% OFF)
  </div>
  </div>

  
</div>

              <div class="points_angle">
                <!-- <div class="pooja_price">
                  <h3>Price: ₹ 899.00</h3>
                </div> -->
                <div class="pooja_button">
                  <button
                    class="btn btn-primary add_now"
                    type="button"
                    onclick="openbooking()"
                  >
                    <img
                      src ="<?= base_url()?>assets/images/carti.png"
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
          <img src ="<?= base_url()?>assets/images/dots1.png" alt="dots" />
        </div>
      </div>
<div class="pooja_des_container">
        <div class="pooja_des_tabs">
          <button class="pooja_des_tab pooja_des_active" data-tab="desc">
            Description
          </button>
          <button class="pooja_des_tab" data-tab="sign">Significance</button>
          <button class="pooja_des_tab" data-tab="faq">Faq's</button>
          <button class="pooja_des_tab" data-tab="review">Reviews (0)</button>

          <div class="pooja_des_share_section">
            <span class="pooja_des_share_text">SHARE</span>
            <div class="pooja_des_social_icons">
              <a
                href="https://www.facebook.com/profile.php?id=61565781186435"
                target="_blank"
              >
                <img src="assets/images/poojaf.png" alt="Facebook" />
              </a>
              <a href="">
                <img src="assets/images/poojat.png" alt="Twitter" />
              </a>
              <a href="https://www.instagram.com/pujaridekho/" target="_blank">
                <img src="assets/images/poojai.png" alt="LinkedIn" />
              </a>
            </div>
          </div>
        </div>

        <div class="pooja_des_content_wrapper">
          <!-- DESCRIPTION -->
          <div class="pooja_des_text_content tab_panel active" id="desc">
            <h1>Puja Description</h1>
            <?= $pooja['full_desc'] ?>
          </div>

          <!-- SIGNIFICANCE -->
          <div class="pooja_des_text_content tab_panel" id="sign">
            <h1>Significance</h1>
            <?= $pooja['significance'] ?>
          </div>

          <!-- FAQ -->
          <div class="pooja_des_text_content tab_panel" id="faq">
            <h1>Faq's</h1>
            <?php if (!empty($pooja['faqs'])): ?>
              <div class="faq_section">
                <?php foreach ($pooja['faqs'] as $faq): ?>
                  <div class="faq_item">
                    <h3 class="faq_question"><?= $faq['question'] ?></h3>
                    <p class="faq_answer"><?= $faq['answer'] ?></p>
                  </div>
                <?php endforeach; ?>
                <?php else: ?>
                  <p>No FAQs available for this pooja.</p>
                <?php endif; ?>
              </div>
          </div>

          <!-- REVIEWS -->
          <div class="pooja_des_text_content tab_panel" id="review">
            <h1>Reviews</h1>
            <p>Backend se aane wala review content.</p>
          </div>

          <!-- IMAGE SECTION SAME -->
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
                  <img src="assets/images/poojanew.png" alt="Pooja Items" />
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
            <img src ="<?= base_url()?>assets/images/abtop.png" alt="top_bar" />
            <h3>Affordable Pooja stuffs to buy</h3>
            <div class="rects_images" style="margin-top: -5px">
              <img src ="<?= base_url()?>assets/images/Rectangle.png" />
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
                <img src ="<?= base_url()?>assets/images/cart1.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src ="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
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
                      src ="<?= base_url()?>assets/images/carti.png"
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
                <img src ="<?= base_url()?>assets/images/cart2.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src ="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
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
                      src ="<?= base_url()?>assets/images/carti.png"
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
                <img src ="<?= base_url()?>assets/images/cart3.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src ="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
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
                      src ="<?= base_url()?>assets/images/carti.png"
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
                <img src ="<?= base_url()?>assets/images/cart4.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src ="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
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
                      src ="<?= base_url()?>assets/images/carti.png"
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
                <img src ="<?= base_url()?>assets/images/cart1.png" alt="" />
              </div>
              <div class="card_widhlist">
                <a href="#" class="wishlist-icon"
                  ><img src ="<?= base_url()?>assets/images/wishlist_cards.png" alt="Wishlist" />
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
                      src ="<?= base_url()?>assets/images/carti.png"
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