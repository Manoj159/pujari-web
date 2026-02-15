        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h3>Pandit List</h3>
        </div>

        <!--========= product table and blog list table same ===================-->

        <div class="productContainer">
          <table class="product-table table table-striped" id="table1">
            <thead>
              <tr class="product-table-row" id="product-TH">
                <th>S.No</th>
                <th width="13%">Pandit Image</th>
                <th>Name</th>
                <th>Exprience</th>
                <th>Specialization</th>
                <!-- <th>Description</th> -->
                <th width="11%">Action</th>
              </tr>
            </thead>

            <tbody id="productTable">
              <?php foreach ($pandits as $i => $pandit): ?>
              <tr class="product-colum" id="product-td">
                <td><?= $i + 1 ?></td>
                <td>
                  <img
                    src="<?= base_url()?>assets/admin/images/samples/YaduanandMishra.png"
                    class="product-image pandit-img"
                  />
                </td>
                <td><?= $pandit['name'] ?></td>
                <td><?= $pandit['experience_years'] ?></td>
                <td><?= $pandit['specialization'] ?></td>
                <!-- <td><?= $pandit['bio'] ?></td> -->
                <td class="productAction">
                  <button class="action-icon paction" id="action-edit">
                    <i class="bi bi-pencil" id="edit"></i>
                  </button>
                  <button
                    class="action-icon paction"
                    id="action-delet"
                    onclick="openmodel(this)"
                  >
                    <img src="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>
              <?php endforeach; ?>


              <!-- <div id="myModal" class="modal">
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
              </div> -->
            </tbody>
          </table>
        </div>