
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h4>Add FAQ</h4>
        </div>

        <div class="uploadBlog-Container">
          <form
            id="faqForm"
            method="POST"
            action="<?= base_url('admin/addfaq') ?>"
            class="uploadBlog-Container-inner"
            onsubmit="return validatePandit();"
          >
            <label>Question</label>
            <input
              type="text"
              id="FaqQuestion"
              name="question"
              placeholder="Enter a new Question"
            />
            <small class="errorText" id="error-que"></small>

            <label>Answer</label>
            <textarea id="FaqAns" name="answer" placeholder="Enter Answer"></textarea>
            <small class="errorText" id="error-Ans"></small>

            <button type="button" class="blog-update-btn" onclick="addFaq()">
              Upload FAQ
            </button>
          </form>
        </div>
