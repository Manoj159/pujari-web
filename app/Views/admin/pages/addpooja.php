        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h4>Add New Blog</h4>
        </div>

        <div class="uploadBlog-Container">
          <form
            id="addNewPooja"
            action="/admin/addpooja/"
            method="post"
            enctype="multipart/form-data"
            class="uploadBlog-Container-inner"
            onsubmit="return validatePoojaForm();"
          >
            <label>Pooja Name</label>
            <input type="text" name="name" id="pooja-name" placeholder="Enter pooja name" />
            <small class="errorText" id="error-pooja-name"></small>

            <label>Short Description</label>
            <textarea
              id="short-desc"
              name="description"
              placeholder="Short pooja description"
            ></textarea>
            <small class="errorText" id="error-short-desc"></small>

            <label>Pooja Type</label>
            <select name="pooja_type" id="pooja-type">
              <option value="">Select Type</option>
              <option value="home">At Home</option>
              <option value="temple">At Temple</option>
              <option value="online">Online</option>
            </select>
            <small class="errorText" id="error-pooja-type"></small>

            <label>Pooja Duration (minutes)</label>
            <input type="number" name="duration_minutes" id="duration" placeholder="e.g. 90" />
            <small class="errorText" id="error-duration"></small>

            <label>Pooja Language</label>
            <select name="language" id="language">
              <option value="">Select Language</option>
              <option value="hindi">Hindi</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="both">Hindi & Sanskrit</option>
            </select>

            <label>Samagri Included?</label>
            <select name="samagri_included" id="samagri">
              <option value="">Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>

            <div id="samagri-box" style="display: none">
              <label>Samagri List (comma separated)</label>
              <textarea
                name="samagri_list"
                id="samagri-list"
                placeholder="Flowers, Coconut, Diya..."
              ></textarea>
            </div>
            <div class="pricess">
              <div class="market_prices" style="width: 100%;">
                <label>Samagiri Price (₹)</label>
                <input
                  name="samagri_price"
                  type="number"
                  id="samagri-price"
                  placeholder="Enter samagri price (e.g. 1299)"
                />
                <small class="errorText" id="error-samagri-price"></small>
              </div>
            </div>

            <div class="pricess">
              <div class="market_prices">
                <label>Market Price (₹)</label>
                <input
                  name="market_price"
                  type="number"
                  id="market-price"
                  placeholder="Enter market price (e.g. 1299)"
                />
                <small class="errorText" id="error-market-price"></small>
              </div>
              <div class="market_prices">
                <label>Pujari Dekho Offer Price (₹)</label>
                <input
                name="price"
                  type="number"
                  id="offer-price"
                  placeholder="Enter offer price (e.g. 899)"
                />
                <small class="errorText" id="error-offer-price"></small>
              </div>
            </div>

    <label>Pooja Images</label>

<div id="image-container">
  <div class="image-row">
    <div class="image-preview">+</div>
    <input
      type="file"
      name="pooja_images[]"
      accept="image/*"
      onchange="previewDynamicImage(this)"
    />
    <button type="button" onclick="removeImage(this)">✕</button>
  </div>
</div>

<button
  type="button"
  class="blog-update-btn"
  onclick="addImage()"
  style="margin-top: 8px"
>
  + Add More Image
</button>

<small class="errorText" id="error-image"></small>


            <!-- ================= POOJA DESCRIPTION ================= -->
            <label>Pooja Detailed Description</label>
            <textarea id="pooja-desc-editor" name="pooja_description">
Write detailed pooja description here...
</textarea
            >

            <!-- ================= SIGNIFICANCE ================= -->
            <label>Pooja Significance</label>
            <textarea id="pooja-significance-editor" name="significance">
Write pooja significance / importance here...
</textarea
            >

            <!-- ================= FAQ SECTION ================= -->
            <label>Pooja FAQ</label>

            <div id="faq-container">
              <div class="faq-row">
                <input
                  type="text"
                  name="faq_question[]"
                  placeholder="Enter Question"
                />
                <input
                  type="text"
                  name="faq_answer[]"
                  placeholder="Enter Answer"
                />
                <button type="button" onclick="removeFaq(this)">✕</button>
              </div>
            </div>

            <button
              type="button"
              class="blog-update-btn"
              onclick="addFaq()"
              style="margin-top: 10px"
            >
              + Add More FAQ
            </button>
            <br />

            <label>Full Pooja Description</label>
            <textarea id="editor" name="full_desc">Write full pooja details...</textarea>

            <label>Meta Title</label>
            <input type="text" name="meta_title" id="meta-title" />

            <label>Meta Description</label>
            <textarea id="meta-desc" name="meta_description"></textarea>

            <label>Meta Keywords</label>
            <input
              type="text"
              name="meta_keyword"
              id="meta-key"
              placeholder="pooja, hindu, pandit"
            />

            <button class="blog-update-btn" onclick="addPooja()" type="button">Add Pooja</button>
          </form>
        </div>


            <script>
      ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
        console.error(error);
      });
    </script>

    <!--=============================== form validation ============================ -->

    <script>
      document
        .getElementById("samagri")
        .addEventListener("change", function () {
          document.getElementById("samagri-box").style.display =
            this.value === "yes" ? "block" : "none";
        });


      function validatePoojaForm() {
        let valid = true;

        const name = document.getElementById("pooja-name").value.trim();
        const desc = document.getElementById("short-desc").value.trim();
        const type = document.getElementById("pooja-type").value;
        const duration = document.getElementById("duration").value;
        const price = document.getElementById("price").value;

        document
          .querySelectorAll(".errorText")
          .forEach((e) => (e.textContent = ""));

        if (!name) {
          document.getElementById("error-pooja-name").textContent =
            "Enter pooja name";
          valid = false;
        }
        if (!desc) {
          document.getElementById("error-short-desc").textContent =
            "Enter description";
          valid = false;
        }
        if (!type) {
          document.getElementById("error-pooja-type").textContent =
            "Select pooja type";
          valid = false;
        }
        if (!duration) {
          document.getElementById("error-duration").textContent =
            "Enter duration";
          valid = false;
        }
        if (!price) {
          document.getElementById("error-price").textContent = "Enter price";
          valid = false;
        }

        if (!valid) return false;

        alert("Pooja added successfully 🙏");
        return true;
      }
    </script>
