        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <form id="productForm" action="<?= base_url('admin/addproduct') ?>" method="post" onsubmit="return validateForm();">
          <div class="page-heading">
            <h3>Add Product (Samagri / Kit)</h3>
          </div>

          <div class="add-product-main">
            <!-- LEFT SIDE -->
            <div class="add-product-left">
              <div class="product-left-card">
                <h6>Category</h6>

                <label>Product Type *</label>
                <select name="product_type" id="productType" onchange="toggleKit()">
                  <option value="">Select</option>
                  <option value="single">Single Samagri Product</option>
                  <option value="kit">Samagri Kit / Combo</option>
                </select>
                <small class="error-text" id="errType"></small>

                <label>Category *</label>
                <select name="category_id" id="category">
                  <option value="">Select</option>
                  <option value="1">Puja Samagri</option>
                  <option value="2">Hawan Samagri</option>
                  <option value="3">Oil & Diya</option>
                  <option value="4">Incense / Dhoop</option>
                </select>
                <small class="error-text" id="errCategory"></small>

                <label>Sub Category</label>
                <input name="sub_category" type="text" id="subCategory" placeholder="Eg: Kapoor" />
              </div>

              <div class="product-left-card">
                <h6>Inventory</h6>

                <label>Product ID *</label>
                <input name="sku" type="text" id="sku" />
                <small class="error-text" id="errSku"></small>

                <label>Status *</label>
                <select name="status" id="status">
                  <option value="">Select</option>
                  <option value="published">Published</option>
                  <option value="draft">Draft</option>
                </select>
                <small class="error-text" id="errStatus"></small>
              </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="add-product-right">
              <div class="product-left-card">
                <h6>General Information</h6>

                <label>Product / Kit Name *</label>
                <input name="name" type="text" id="productName" />
                <small class="error-text" id="errName"></small>

                <label>Description *</label>
                <textarea name="description" id="description"></textarea>
              </div>

              <!-- KIT DETAILS -->
              <div class="product-left-card" id="kitBox" style="display: none">
                <h6>Kit Details</h6>

                <label>Kit Items (Item – Quantity)</label>
                <textarea name="kit_details"
                  id="kitItems"
                  placeholder="Kapoor – 100g&#10;Diya – 2 pcs"
                ></textarea>

                <label>Total Items Count</label>
                <input name="kit_count" type="number" id="kitCount" />
              </div>

              <div class="product-left-card">
                <h6>Pricing & Stock</h6>

                <label>MRP (₹)</label>
                <input name="mrp_price" type="number" id="mrp" />

                <label>Selling Price (₹) *</label>
                <input name="selling_price" type="number" id="price" />
                <small class="error-text" id="errPrice"></small>

                <label>Stock Quantity *</label>
                <input name="stock" type="number" id="stock" />
                <small class="error-text" id="errStock"></small>
              </div>

              <div class="product-left-card">
                <h6>Product Image</h6>
                <input name="product_image" type="file" id="image" />
              </div>

              <div class="save-cancel-btn">
                <button class="product-save-now save-now" type="button" onclick="saveProduct()">
                  <i class="bi-check-circle"></i> Save Now
                </button>
                <button class="product-save-now" type="reset">
                  <i class="bi bi-x-circle"></i> Clear
                </button>
              </div>
            </div>
          </div>
        </form>


          <script>
      function toggleKit() {
        document.getElementById("kitBox").style.display =
          document.getElementById("productType").value === "kit"
            ? "block"
            : "none";
      }

      function validateForm() {
        let valid = true;
        document
          .querySelectorAll(".error-text")
          .forEach((e) => (e.textContent = ""));

        if (productType.value === "") {
          errType.textContent = "Select product type";
          valid = false;
        }
        if (category.value === "") {
          errCategory.textContent = "Select category";
          valid = false;
        }
        if (sku.value === "") {
          errSku.textContent = "SKU required";
          valid = false;
        }
        if (status.value === "") {
          errStatus.textContent = "Select status";
          valid = false;
        }
        if (productName.value === "") {
          errName.textContent = "Product name required";
          valid = false;
        }
        if (price.value === "") {
          errPrice.textContent = "Enter price";
          valid = false;
        }
        if (stock.value === "") {
          errStock.textContent = "Enter stock";
          valid = false;
        }

        if (!valid) return false;

        alert("✅ Product Added Successfully");
        return true;
      }
    </script>