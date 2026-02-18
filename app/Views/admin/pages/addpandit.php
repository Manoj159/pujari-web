       <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h3>Our Pandit</h3>
        </div>
        <div class="uploadBlog-Container">
          <form
            id="addNewPandit"
            class="uploadBlog-Container-inner"
            method="post"
            action="<?= base_url('admin/addpandit') ?>"
            enctype="multipart/form-data"
          >

            <label>Name</label>
            <input type="text" name="name" id="namePandit" placeholder="Pandit name" />
            <small class="errorText" id="error-name"></small>

            <label>Experience</label>
            <input
              type="number"
              name="experience_years"
              id="ExpriencePandit"
              placeholder="Enter Experience (years)"
            />
            <small class="errorText" id="error-experience_years"></small>

            <label>Pandit Image</label>
            <input type="file" name="profile_image" id="upload-image" />
            <small class="errorText" id="error-profile_image"></small>
            <label>Specialization</label>
            <input type="text" name="specialization" id="spec" placeholder="Enter specialization" />
            <small class="errorText" id="error-specialization"></small>

            <label>Description</label>
            <textarea id="desc" name="bio" placeholder="Short description"></textarea>
            <small class="errorText" id="error-bio"></small>

            <!-- ✔️ onclick removed -->
            <button class="blog-update-btn" type="button" onclick="addPandit()">Upload Now</button>
          </form>
        </div>



        