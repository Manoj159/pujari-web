        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h3>FAQ List</h3>
        </div>

        <!--========= ================-->
        <div class="">
          <div class="faq-list">
            <div id="faqContainer"></div>
          </div>

          <script>
            const faqData = [
              <?php foreach ($faqs as $faq): ?>
              {
                question: `Q. `+`<?= esc($faq['question'], 'js') ?>`,
                answer: `Ans: `+`<?= esc($faq['answer'], 'js') ?>`,
              },
              <?php endforeach; ?>
            ];

            const faqContainer = document.getElementById("faqContainer");

            function loadFAQs() {
              faqContainer.innerHTML = "";

              faqData.forEach((faq, index) => {
                faqContainer.innerHTML += `
                <div class="card faq-card">
                    <div class="card-body">
                        <div class="faq-question" onclick="toggleFAQ(${index})">
                            ${faq.question}
                        </div>
                        <div class="faq-answer" id="faq-${index}">
                            ${faq.answer}
                        </div>
                    </div>
                </div>
            `;
              });
            }

            function toggleFAQ(index) {
              const answer = document.getElementById(`faq-${index}`);
              answer.style.display =
                answer.style.display === "block" ? "none" : "block";
            }

            loadFAQs();
          </script>
        </div>