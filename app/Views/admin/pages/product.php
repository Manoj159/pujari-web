        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="productContainer">
          <div class="p-top-bar">
            <div class="p-search-box">
              <h3>Products List</h3>
            </div>
          </div>

          <table class="product-table table table-striped" id="table1">
            <thead>
              <tr class="product-table-row">
                <th>Product Name</th>
                <th>Product Id</th>
                <th>Category</th>
                <th>Price</th>
                <th>Statistics</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody id="productTable">
              <tr class="product-colum">
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/Griha-pravesh-puja (1).webp"
                    class="product-image"
                  />
                  <span class="product-name">Griha-pravesh-puja</span>
                </td>
                <td>101</td>
                <td>Puja</td>
                <td>4,999</td>
                <td>Best</td>
                <td>11 Dec 2025</td>
                <td class="productAction">
                  <button class="action-icon" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <!-- <button class="action-icon" id="action-eyet">
                                    <i class="bi bi-eye" id="eye"></i>
                                </button> -->
                  <button
                    class="action-icon"
                    id="action-delet"
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>

              <!-- =============== row 2===========-->

              <tr class="product-colum">
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/BhumiPujan.webp"
                    class="product-image"
                  />
                  <span class="product-name">Bhoomi puja</span>
                </td>
                <td>102</td>
                <td>Puja</td>
                <td>5,999</td>
                <td>Top</td>
                <td>15 Dec 2025</td>
                <td class="productAction">
                  <button class="action-icon" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <!-- <button class="action-icon" id="action-eyet">
                                    <i class="bi bi-eye" id="eye"></i>
                                </button> -->
                  <button
                    class="action-icon action-delet"
                    id="action-delet"
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>
              <!-- =============== row 3===========-->

              <tr class="product-colum">
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/office-opening-puja.webp"
                    class="product-image"
                  />
                  <span class="product-name">Office puja</span>
                </td>
                <td>103</td>
                <td>Puja</td>
                <td>5,999</td>
                <td>Top</td>
                <td>13 Dec 2025</td>
                <td class="productAction">
                  <button class="action-icon" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <!-- <button class="action-icon" id="action-eyet">
                                    <i class="bi bi-eye" id="eye"></i>
                                </button> -->
                  <button
                    class="action-icon action-delet"
                    id=""
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>

              <!-- =============== row 4===========-->

              <tr class="product-colum">
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/vahana-puja.webp"
                    class="product-image"
                  />
                  <span class="product-name">Vehicle Puja</span>
                </td>
                <td>104</td>
                <td>Puja</td>
                <td>3,999</td>
                <td>Top</td>
                <td>16 Dec 2025</td>
                <td class="productAction">
                  <button class="action-icon" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <!-- <button class="action-icon" id="action-eyet">
                                    <i class="bi bi-eye" id="eye"></i>
                                </button> -->
                  <button
                    class="action-icon action-delet"
                    id=""
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>

              <!-- =============== row 5===========-->

              <tr class="product-colum">
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/happy-navratri-puja.webp"
                    class="product-image"
                  />
                  <span class="product-name">Navarati Durga Puja</span>
                </td>
                <td>105</td>
                <td>Puja</td>
                <td>4,999</td>
                <td>Top</td>
                <td>12 Dec 2025</td>
                <td class="productAction">
                  <button class="action-icon" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <!-- <button class="action-icon" id="action-eyet">
                                    <i class="bi bi-eye" id="eye"></i>
                                </button> -->
                  <button
                    class="action-icon action-delet"
                    id=""
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>

              <!-- =============== row 6===========-->

              <tr class="product-colum">
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/MahaGananpati-Puja.webp"
                    class="product-image"
                  />
                  <span class="product-name">Maha Gananpati Puja</span>
                </td>
                <td>106</td>
                <td>Puja</td>
                <td>6,999</td>
                <td>Top</td>
                <td>10 Dec 2025</td>
                <td class="productAction">
                  <button class="action-icon" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <!-- <button class="action-icon" id="action-eyet">
                                    <i class="bi bi-eye" id="eye"></i>
                                </button> -->
                  <button
                    class="action-icon action-delet"
                    id=""
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>

              <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="close" onclick="closeModal()">x</span>
                  <p>Are you sure you want to delete this product?</p>
                  <div class="cancelAnd-okBtn">
                    <button id="cancelBtn" onclick="closeModal()">
                      Cancel
                    </button>
                    <button id="okBtn">OK</button>
                  </div>
                </div>
              </div>
            </tbody>
          </table>
        </div>