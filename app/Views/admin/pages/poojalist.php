        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h3>Blog List</h3>
        </div>

        <!--========= product table and blog list table same ===================-->
        <div class="productContainer">
          <table class="product-table table table-striped" id="table1">
            <thead>
              <tr id="product-TH">
                <th>S.No</th>
                <th>Pooja Image</th>
                <th>Pooja Name</th>
                <th>Pooja Type</th>
                <th>Samagri</th>
                <th>Base Price (₹)</th>
                <th>Samagri Price (₹)</th>
                <th>Final Price (₹)</th>
                <th>Status</th>
                <th width="12%">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($poojas as $key => $pooja): ?>
              <tr id="product-td">
                <td><?= $key + 1 ?></td>
                <td>
                  <img
                    src ="<?= base_url()?>/uploads/poojas/<?= $pooja['image_path'] ?>"
                    class="product-image"
                  />
                </td>
                <td><?= $pooja['name'] ?></td>
                <td><?= $pooja['pooja_type'] ?></td>
                <td>
                  <button
                    class="btn btn-sm btn-outline-primary"
                    onclick="
                      openSamagriModal([
                        'Flowers – 2 kg',
                        'Coconut – 1',
                        'Rice – 1 kg',
                        'Diya – 1',
                        'Agarbatti',
                      ])
                    "
                  >
                    Total: 5 items
                  </button>
                </td>

                <td><?= $pooja['market_price'] ?></td>
                <td>300</td>
                <td><strong><?= $pooja['price'] ?></strong></td>
                <td><span class="badge bg-success">Active</span></td>
                <td class="productAction">
                  <button
                    class="action-icon"
                    onclick="
                      openPoojaDetailModal({
                        name: 'Griha Pravesh Puja',
                        description:
                          'This is full pooja description from admin...',
                        significance:
                          'This pooja brings peace, prosperity and removes vastu dosh.',
                        faq: [
                          {
                            q: 'When should we do Griha Pravesh?',
                            a: 'As per muhurat and vastu.',
                          },
                          {
                            q: 'Is samagri included?',
                            a: 'Yes, complete samagri is included.',
                          },
                        ],
                        images: [
                          'assets/images/samples/Griha-pravesh-puja (1).webp',
                          'assets/images/samples/Griha-pravesh-puja (2).webp',
                          'assets/images/samples/Griha-pravesh-puja (3).webp',
                        ],
                      })
                    "
                  >
                    <i class="bi bi-eye"></i>
                  </button>

                  <button class="action-icon">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="action-icon" onclick="openmodel(this)">
                    <img src ="<?= base_url()?>assets/admin/images/samples/delet box.png" />
                  </button>
                </td>
              </tr>
              <?php endforeach; ?>



            </tbody>
          </table>
        </div>