@extends('layouts.frontend')

@section('content')



  <!-- ✅ Banner Section with <img> -->
      <!-- ✅ Banner Section with <img> -->
  <section class="relative w-full h-[400px] md:h-[500px] overflow-hidden mb-16">
    <img
      src="{{ asset('backend') }}/image/tech-develop-zone.jpg"
      alt="Company Banner"
      class="w-full h-full object-fill"
    />
    <!-- Overlay Text -->
    <div class="absolute inset-0 bg-black bg-opacity-20 flex flex-col justify-end content-end items-end text-white text-center p-4">
      <div class=" mx-auto text-center">
        <div class="text-center mx-auto ">
          <p class="mt-4 text-lg max-w-2xl leading-6 text-gray-300">We provide technology-driven solutions including affiliate products and high-quality digital services.</p>
        </div>
      </div>

    </div>
  </section>



  <!-- 🛒 Affiliate Product Section -->
  <section class="py-12 px-6 bg-gray-50">
    <h2 class="text-2xl font-semibold text-center mb-8 text-orange-400">Featured Products</h2>
    <div class="grid md:grid-cols-4 grid-cols-3 gap-3 max-w-6xl mx-auto">

      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-2">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-orange-400 text-white px-4 py-2 rounded hover:bg-orange-500 transition">Buy Now</a>
        </div>
      </div>


      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-3">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-orange-400 text-white px-4 py-2 rounded hover:bg-orange-500 transition">Buy Now</a>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-3">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-orange-400 text-white px-4 py-2 rounded hover:bg-orange-500 transition">Buy Now</a>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-3">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-orange-400 text-white px-4 py-2 rounded hover:bg-orange-500 transition">Buy Now</a>
        </div>
      </div>


      <!-- Repeat for other products -->
    </div>
  </section>

  <!-- 💼 Digital Services Section -->
  <section class="py-12 px-6">
    <h2 class="text-2xl font-semibold text-center mb-8 text-orange-400">Our Digital Services</h2>
    <div class="grid md:grid-cols-5 gap-3 max-w-6xl mx-auto">

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Graphic Design</h3>
            <p class="leading-6">Creative and professional design solutions for brands.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Web Development</h3>
            <p class="leading-6">Responsive, SEO-friendly, and modern web design services.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
            <p class="leading-6">Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
            <p class="leading-6">Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
            <p class="leading-6">Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
            <p class="leading-6">Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
            <p class="leading-6">Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
        </div>

        <div class="bg-white border p-6 rounded text-center leading-6">
            <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
            <p class="leading-6">Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
        </div>

    </div>
    <div class="text-center mt-8">
      <a href="#" class="view-all bg-orange-400 text-white px-6 py-2 rounded hover:bg-orange-500">View All Services</a>
    </div>
  </section>


  <!-- 📦 Sample Deliveries Section -->
  <section class="py-12 px-6 bg-gray-50">
    <h2 class="text-2xl font-semibold text-center mb-8 text-orange-400">Sample Deliveries</h2>

    <!-- Slider Container -->
    <div class="relative max-w-6xl mx-auto">

      <!-- Slider -->
      <div id="slider" class="flex overflow-x-auto gap-4 scroll-smooth snap-x snap-mandatory">

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="max-w-sm w-60 bg-white flex-shrink-0 rounded-lg shadow-md snap-center overflow-hidden rounded-lg shadow hover:shadow-lg transition">
            <!-- Product Image -->
            <img src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="Product Name" class="w-full h-60 object-cover">

            <!-- Product Info -->
            <div class="p-4 bg-gray-200">
                <h2 class="text-xl font-semibold mb-2">Product Title</h2>
                <p class="text-gray-600 text-sm">
                This is a short description of the product. It explains key features or benefits to help customers understand what it offers.
                </p>
            </div>
        </div>


      </div>

      <!-- Controls -->
      <div class="flex justify-center mt-6 gap-4">
        <button onclick="scrollSlider(-1)" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">← Prev</button>
        <button onclick="scrollSlider(1)" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Next →</button>
      </div>
    </div>
  </section>

  <!-- ✅ JavaScript -->
  <script>
    function scrollSlider(direction) {
      const slider = document.getElementById('slider');
      const scrollAmount = 320; // Adjust based on image size + gap
      slider.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
      });
    }
  </script>


  <!-- 🤝 Support Info Section -->
  <section class="py-12 px-6">
    <h2 class="text-2xl font-semibold text-center mb-6 text-orange-400">Customer Support</h2>
    <p class="text-center max-w-2xl mx-auto">Our team is available 24/7 to support you with inquiries related to our products, digital services, and deliveries. Reach out to us via email or live chat anytime.</p>
  </section>


@endsection
