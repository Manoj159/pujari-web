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
            method="POST"
            enctype="multipart/form-data"
            action="<?= base_url('admin/addblog') ?>"
            id="blogForm"
            class="uploadBlog-Container-inner"
            onsubmit="return validateformFree();"
          >
            <label>Blog Title</label>
            <input
              type="text"
              id="blog-tiitle"
              name="title"
              placeholder="Enter blog title"
            />
            <small class="error-title" id="error-blog-title"></small>

            <label>Mata Description</label>
            <textarea
              id="meta-discription"
              name="meta_description"
              placeholder="Enter meta descripption"
            ></textarea>
            <small class="error-description" id="error-meta-description"></small>

            <label> Meta Keyword (comma separated)</label>
            <input
              type="text"
              name="meta_keywords"
              id="meta-keyword"
              placeholder="Enter blog Keywords"
            />
            <small class="error-keyword" id="error-meta-keyword"></small>

            <label>Blog Image</label>
            <input type="file" name="blog_image" id="blog-image" />

            <label>Blog Content</label>

            <textarea id="editor" name="content">Write blog content here...</textarea>
            <button class="blog-update-btn" type="button" onclick="validateformFree()">
              Upload Blog
            </button>
          </form>
        </div>

   <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
            <script>
      ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
        console.error(error);
      });
    </script>
     

    <!--=============================== form validation ============================ -->

    <script>
      function validateformFree() {
        const blogTitle = document.getElementById("blog-tiitle").value.trim();
        const metaDis = document
          .getElementById("meta-discription")
          .value.trim();
        const metaKey = document.getElementById("meta-keyword").value.trim();

        document
          .querySelectorAll("errorText")
          .forEach((e) => (e.textContent = ""));

        let isvalid = true;

        formdata = new FormData(document.getElementById('blogForm'));
        $.ajax({
            url: '<?= base_url('admin/addblog') ?>',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response.status === 'error') {
                $('#error-title').text(response.errors.title);
            } else {
                $('#error-title').text('');
            }
            if(response.errors.meta_description){
                $('#error-meta-description').text(response.errors.meta_description);
            } else {
                $('#error-meta-description').text('');
            }
            if(response.errors.meta_keywords){
                $('#error-meta-keyword').text(response.errors.meta_keywords);
            } else {
                $('#error-meta-keyword').text('');
            }
            if(response.errors.blog_image){
                $('#error-blog-image').text(response.errors.blog_image);
            } else {
                $('#error-blog-image').text('');
            }
        
                if(response.status === 'success') {
                    alert(response.message);
                    // Optionally, reset the form or redirect
                    document.getElementById('blogForm').reset()
                }
                    return;
        },
        error: function() {
            alert('An error occurred while submitting the form.');
        }
    });
  }
</script>
