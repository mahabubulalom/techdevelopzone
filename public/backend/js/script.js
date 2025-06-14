// filtar product by category---------------

function filterByCategory(category) {
  const allItems = document.querySelectorAll(".product-card");

  allItems.forEach(item => {
    const itemCategory = item.dataset.category;

    if (category === "all" || itemCategory === category) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}

    // pagination --------------------------------

const productsPerPage = 28;
let currentPage = 1;

const allItems = Array.from(document.querySelectorAll(".product-card"));
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");
const pageIndicator = document.getElementById("page-indicator");

function renderPagination() {
  const start = (currentPage - 1) * productsPerPage;
  const end = start + productsPerPage;

  allItems.forEach((item, index) => {
    item.style.display = (index >= start && index < end) ? "block" : "none";
  });

  pageIndicator.textContent = `Page ${currentPage}`;
  prevBtn.disabled = currentPage === 1;
  nextBtn.disabled = end >= allItems.length;
}

prevBtn.addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--;
    renderPagination();
  }
});

nextBtn.addEventListener("click", () => {
  if ((currentPage * productsPerPage) < allItems.length) {
    currentPage++;
    renderPagination();
  }
});

// Initial render
renderPagination();


// product slidar ------------------


  const carousel = document.getElementById('carousel');
    const products = carousel.children;
    const productCount = 8;
    let currentIndex = 2; // because we cloned 2 at start

    function updateCarousel(animate = true) {
      const translateX = -currentIndex * 20; // Each product is 20%
      if (!animate) {
        carousel.style.transition = 'none';
      } else {
        carousel.style.transition = 'transform 0.5s ease-in-out';
      }
      carousel.style.transform = `translateX(${translateX}%)`;

      // Remove all active
      Array.from(products).forEach(p => p.classList.remove('active'));
      // Set active product at center
      const activeIndex = currentIndex + 2;
      if (products[activeIndex]) {
        products[activeIndex].classList.add('active');
      }
    }

    function nextSlide() {
      currentIndex++;
      updateCarousel();
      if (currentIndex === productCount + 2) {
        setTimeout(() => {
          currentIndex = 2;
          updateCarousel(false);
        }, 510);
      }
    }

    function prevSlide() {
      currentIndex--;
      updateCarousel();
      if (currentIndex === 1) {
        setTimeout(() => {
          currentIndex = productCount + 1;
          updateCarousel(false);
        }, 510);
      }
    }

    document.getElementById('nextBtn').addEventListener('click', nextSlide);
    document.getElementById('prevBtn').addEventListener('click', prevSlide);

    setInterval(nextSlide, 4000);
    updateCarousel();