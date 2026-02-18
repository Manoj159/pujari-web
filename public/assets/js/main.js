document.addEventListener("DOMContentLoaded", function () {
  const currentUrl = window.location.href;
  const navLinks = document.querySelectorAll("nav#navbarMain .nav-link");

  navLinks.forEach((link) => {
    if (
      currentUrl == link.getAttribute("href") &&
      link.getAttribute("href") !== "#"
    ) {
      link.classList.add("active");
    }
  });
});

function poojadetails(pooja, pid) {
  const params = new URLSearchParams({
    pooja: pooja,
    type: pid
  });

  window.location.href = "/bookingdetails?" + params.toString();
}

function submitContact() {
  const form = document.getElementById("contactForm");
  const formData = new FormData(form);

  // get token name + value
  const csrfField = document.querySelector('#contactForm input[type="hidden"]');
  const csrfName  = csrfField.name;
  const csrfValue = csrfField.value;

  // append to FormData (CRITICAL)
  formData.append(csrfName, csrfValue);

  $.ajax({
    url: '/contact-us',
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,

    success: function (response) {
      alert(response.message || 'Submitted successfully');
      form.reset();

      // 🔥 update token after submit
      if (response.csrf) {
        csrfField.value = response.csrf;
        document.querySelector('meta[name="csrf-token"]').content = response.csrf;
      }
    },

    error: function (xhr) {
      console.error(xhr.responseText);
      alert('CSRF Error: Please refresh the page and try again.');
    }
  });
}






$(document).ready(function () {
  $("#owl-carousel-A").owlCarousel({
    loop: true,
    nav: false,
    items: 1,
    margin: 40,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 1 },
    },
  });
});
$(document).ready(function () {
  $("#owl-carousel-B").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    items: 4,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 4 },
    },
  });
});
$(document).ready(function () {
  $("#owl-carousel-C").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    items: 4.3,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 4.2 },
    },
  });
});
$(document).ready(function () {
  $("#owl-carousel-D").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    items: 3,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 3 },
    },
  });
});

function toggleService(index) {
  const cards = document.querySelectorAll(".service-card");
  const card = cards[index];
  const details = card.querySelector(".service-details");
  const icon = card.querySelector(".toggle-icon");
  const isActive = details.classList.contains("active");
  document.querySelectorAll(".service-details").forEach((detail, i) => {
    if (i !== index) {
      detail.classList.remove("active");
      cards[i].querySelector(".toggle-icon").classList.remove("rotated");
    }
  });
  if (isActive) {
    details.classList.remove("active");
    icon.classList.remove("rotated");
  } else {
    details.classList.add("active");
    icon.classList.add("rotated");
  }
}

function toggleDescription(link) {
  const panditCard = link.closest(".pandi_cards");
  const description = panditCard.querySelector(".pandit_description");
  const fullText = description.getAttribute("data-full-text");
  const truncatedText = fullText.split(" ").slice(0, 55).join(" ") + "...";
  const isExpanded = link.innerText === "Read Less";

  // Check if the text is expanded or not
  if (!isExpanded) {
    description.innerHTML =
      fullText +
      ' <a href="javascript:void(0);" class="read_more_link" onclick="toggleDescription(this)">Read Less</a>';
    panditCard.classList.add("expanded-card");
  } else {
    description.innerHTML =
      truncatedText +
      ' <a href="javascript:void(0);" class="read_more_link" onclick="toggleDescription(this)">Read More</a>';
    panditCard.classList.remove("expanded-card");
  }
}

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".pandit_description").forEach((description) => {
    const fullText = description.innerHTML;
    const truncatedText = fullText.split(" ").slice(0, 55).join(" ") + "...";
    description.setAttribute("data-full-text", fullText);
    description.innerHTML =
      truncatedText +
      ' <a href="javascript:void(0);" class="read_more_link" onclick="toggleDescription(this)">Read More</a>';
  });
});

const video = document.getElementById("video1");
const playButton = document.getElementById("customPlayBtn");

// Only attach video-related handlers if the video exists on the page
if (video) {
  function checkVideoInView() {
    const rect = video.getBoundingClientRect();
    const isInView = rect.top < window.innerHeight && rect.bottom > 0;

    if (isInView) {
      if (video.paused && !video.manualPaused) {
        video.play();
      }
    } else {
      if (!video.paused) {
        video.pause();
      }
    }
  }

  window.addEventListener("scroll", checkVideoInView);
  document.addEventListener("DOMContentLoaded", checkVideoInView);

  if (playButton) {
    playButton.addEventListener("click", () => {
      video.play();
      video.manualPaused = false;
      playButton.style.display = "none";
    });
  }

  video.addEventListener("pause", () => {
    if (!video.ended) {
      video.manualPaused = true;
      if (playButton) playButton.style.display = "block";
    }
  });

  video.addEventListener("play", () => {
    if (playButton) playButton.style.display = "none";
    video.manualPaused = false;
  });
}
function cartFunction(link) {
  const panditCard = link.closest(".pandi_cards");
  const description = panditCard.querySelector(".pandit_descriptions");

  const isExpanded = link.innerText === "Read Less";
  const paragraphs = description.querySelectorAll("p");

  if (!isExpanded) {
    paragraphs.forEach((p) => {
      p.style.display = "block";
    });
    link.innerText = "Read Less";
  } else {
    paragraphs.forEach((p, index) => {
      if (index > 0) {
        p.style.display = "none";
      }
    });
    link.innerText = "Read More";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".pandit_descriptions").forEach((description) => {
    const paragraphs = description.querySelectorAll("p");
    paragraphs.forEach((p, index) => {
      if (index > 0) {
        p.style.display = "none";
      }
    });
    if (!description.querySelector(".read_more_link")) {
      const link = document.createElement("a");
      link.href = "javascript:void(0);";
      link.className = "read_more_link";
      link.innerText = "Read More";
      link.style.display = "inline";
      link.onclick = function () {
        cartFunction(link);
      };
      description.appendChild(link);
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach((question) => {
    const toggleIcon = question.querySelector(".plus");
    const answer = question.nextElementSibling; // expected .faq-answer
    if (!answer) return;

    // Make question focusable and ARIA-friendly
    question.setAttribute("tabindex", "0");
    question.setAttribute("role", "button");
    question.setAttribute("aria-expanded", "false");
    answer.setAttribute("aria-hidden", "true");

    // Prepare simple max-height animation
    answer.style.overflow = "hidden";
    answer.style.maxHeight = "0";
    answer.style.transition = "max-height 0.28s ease";

    function closeAll() {
      document.querySelectorAll(".faq-question.open").forEach((q) => {
        q.classList.remove("open");
        q.setAttribute("aria-expanded", "false");
        const ic = q.querySelector(".plus");
        if (ic) ic.textContent = "+";
        const ans = q.nextElementSibling;
        if (ans) {
          ans.classList.remove("open");
          ans.setAttribute("aria-hidden", "true");
          ans.style.maxHeight = "0";
        }
      });
    }

    function openThis() {
      question.classList.add("open");
      question.setAttribute("aria-expanded", "true");
      if (toggleIcon) toggleIcon.textContent = "❌";
      answer.classList.add("open");
      answer.setAttribute("aria-hidden", "false");
      // set maxHeight to allow smooth expand
      answer.style.maxHeight = answer.scrollHeight + "px";
    }

    function toggle() {
      const isOpen = question.classList.contains("open");
      if (isOpen) {
        // close this
        question.classList.remove("open");
        question.setAttribute("aria-expanded", "false");
        if (toggleIcon) toggleIcon.textContent = "+";
        answer.classList.remove("open");
        answer.setAttribute("aria-hidden", "true");
        answer.style.maxHeight = "0";
      } else {
        closeAll();
        openThis();
      }
    }

    // Click anywhere on the question toggles
    question.addEventListener("click", function (e) {
      // prevent accidental clicks on links inside question
      if (e.target && e.target.tagName.toLowerCase() === "a") return;
      toggle();
    });

    // Keyboard support (Enter / Space)
    question.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        toggle();
      }
    });
  });
});

// Toggle Menu for Mobile
function toggleMenu() {
  const nav = document.getElementById("navbarMain");
  nav.classList.toggle("active");
}
function openbooking() {
  document.getElementById("bokkingmodal").style.display = "block";
  document.body.style.overflow = "hidden"; // Prevent page scroll

  // Set minimum date (today)
  const today = new Date().toISOString().split("T")[0];
  document.getElementById("trial_date").setAttribute("min", today);
}

// Close the modal and restore page scroll
function closebooking() {
  document.getElementById("bokkingmodal").style.display = "none";
  document.body.style.overflow = "auto"; // Allow page scroll again
}

// Show/hide the "Other Puja Name" field based on selection in the dropdown
function toggleOtherPujaField() {
  const pujaType = document.getElementById("trial_examType").value;
  const otherPujaField = document.getElementById("otherPujaNameField");
  if (pujaType === "other") {
    otherPujaField.style.display = "block";
  } else {
    otherPujaField.style.display = "none";
  }
}
function validateForm() {
  const selectedDate = document.getElementById("trial_date").value;
  const currentDate = new Date().toISOString().split("T")[0];

  if (selectedDate < currentDate) {
    alert("Please select a date that is today or in the future.");
    return false;
  }
  alert("Form submitted successfully!");
  return true;
}

function openconsultmodal() {
  document.getElementById("Consultantmodal").style.display = "block";
  document.body.style.overflow = "hidden"; // Prevent page scroll
}

// Close the modal and restore page scroll
function closeconsultmodal() {
  document.getElementById("Consultantmodal").style.display = "none";
  document.body.style.overflow = "auto"; // Allow page scroll again
}
// Validate Date of Birth (Make sure it's not a future date)
function validateDateOfBirth() {
  const dob = document.getElementById("trial_date").value;
  const today = new Date().toISOString().split("T")[0]; // Get today's date in YYYY-MM-DD format

  const dobError = document.getElementById("dob-error");

  if (dob > today) {
    dobError.style.display = "inline"; // Show error message
    document.getElementById("trial_date").classList.add("error");
    return false;
  } else {
    dobError.style.display = "none"; // Hide error message if valid
    document.getElementById("trial_date").classList.remove("error");
  }
  return true;
}

// Validate Birth Timing (Check if the time is in HH:MM format)
function validateBirthTiming() {
  const timing = document.getElementById("trial_timing").value;
  const regex = /^([0-1]?[0-9]|2[0-3]):([0-5]?[0-9])$/; // HH:MM format

  const timingError = document.getElementById("timing-error");

  if (!regex.test(timing)) {
    timingError.style.display = "inline"; // Show error message
    document.getElementById("trial_timing").classList.add("error"); // Optionally add a class to highlight the field
    return false;
  } else {
    timingError.style.display = "none"; // Hide error message if valid
    document.getElementById("trial_timing").classList.remove("error");
  }
  return true;
}

// Optional: You can also validate both fields when the form is submitted
function validateForm() {
  const dobValid = validateDateOfBirth();
  const timingValid = validateBirthTiming();

  if (dobValid && timingValid) {
    document.getElementById("trialForm").submit(); // Submit form if both fields are valid
  } else {
    // Do not submit the form if validation fails
    return false;
  }
}

let cart = [];

// Add to Cart Function
function addToCart(name, price, image) {
  const existingItem = cart.find((item) => item.name === name);

  if (existingItem) {
    existingItem.quantity++;
  } else {
    cart.push({
      name: name,
      price: price,
      image: image,
      quantity: 1,
    });
  }

  updateCart();
  openCart();

  // Badge Animation
  const badge = document.getElementById("cartBadge");
  badge.style.transform = "scale(1.5)";
  setTimeout(() => {
    badge.style.transform = "scale(1)";
  }, 200);
}

// Open Cart
function openCart() {
  document.getElementById("cartSidebar").classList.add("active");
  document.getElementById("cartOverlay").classList.add("active");
  document.body.style.overflow = "hidden";
}

// Close Cart
function closeCart() {
  document.getElementById("cartSidebar").classList.remove("active");
  document.getElementById("cartOverlay").classList.remove("active");
  document.body.style.overflow = "auto";
}

// Remove Item
function removeFromCart(index) {
  cart.splice(index, 1);
  updateCart();
}

// Update Quantity
function updateQuantity(index, change) {
  cart[index].quantity += change;
  if (cart[index].quantity <= 0) {
    removeFromCart(index);
  } else {
    updateCart();
  }
}

// Update Cart Display
function updateCart() {
  const cartItemsDiv = document.getElementById("cartItems");
  const cartBadge = document.getElementById("cartBadge");
  const cartSummary = document.getElementById("cartSummary");

  const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
  cartBadge.textContent = totalItems;

  if (cart.length === 0) {
    cartItemsDiv.innerHTML = `
            <div class="empty-cart">
                <i class="fas fa-shopping-cart"></i>
                <h3>Your cart is empty</h3>
                <p>Add some products to get started!</p>
            </div>
        `;
    cartSummary.style.display = "none";
  } else {
    cartItemsDiv.innerHTML = cart
      .map(
        (item, index) => `
            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="${item.image}" alt="${item.name}" />
                </div>
                <div class="cart-item-details">
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-price">₹${item.price.toFixed(2)}</div>
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="updateQuantity(${index}, -1)">
                            <i class="fas fa-minus"></i>
                        </button>
                        <span class="quantity-value">${item.quantity}</span>
                        <button class="quantity-btn" onclick="updateQuantity(${index}, 1)">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <button class="remove-item" onclick="removeFromCart(${index})">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        `
      )
      .join("");

    const subtotal = cart.reduce(
      (sum, item) => sum + item.price * item.quantity,
      0
    );
    const delivery = 50;
    const total = subtotal + delivery;

    document.getElementById("subtotal").textContent = `₹${subtotal.toFixed(2)}`;
    document.getElementById("delivery").textContent = `₹${delivery.toFixed(2)}`;
    document.getElementById("total").textContent = `₹${total.toFixed(2)}`;

    cartSummary.style.display = "block";
  }
}

// Checkout Function
function checkout() {
  if (cart.length === 0) {
    alert("Your cart is empty!");
    return;
  }

  const total =
    cart.reduce((sum, item) => sum + item.price * item.quantity, 0) + 50;
  alert(
    `Proceeding to checkout!\n\nTotal Amount: ₹${total.toFixed(
      2
    )}\n\nThank you for shopping!`
  );

  cart = [];
  updateCart();
  closeCart();
}

// Close cart on Escape key
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeCart();
  }
});

const slider = document.getElementById("thumbSlider");

function slideLeft() {
  slider.scrollLeft -= 150;
}

function slideRight() {
  slider.scrollLeft += 150;
}

function changeImage(element) {
  document.getElementById("mainImage").src = element.src;
}

// Tab switching functionality
document.querySelectorAll(".pooja_des_tab").forEach(tab => {
  tab.addEventListener("click", () => {

    // active tab
    document.querySelectorAll(".pooja_des_tab")
      .forEach(t => t.classList.remove("pooja_des_active"));
    tab.classList.add("pooja_des_active");

    // show content
    document.querySelectorAll(".tab_panel")
      .forEach(c => c.classList.remove("active"));

    document.getElementById(tab.dataset.tab)
      .classList.add("active");
  });
});

function toggleSamagri(show) {
    document.getElementById("samagriListBox").style.display =
      show ? "block" : "none";
  }