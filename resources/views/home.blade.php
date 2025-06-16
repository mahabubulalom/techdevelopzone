@extends('layouts.frontend')

@section('content')



  <!-- ✅ Banner Section with <img> -->
<section class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
  <img
    src="{{ asset('backend') }}/image/tech-develop-zone.jpg"
    alt="Company Banner"
    class="w-full h-full object-fill"
  />
  <!-- Overlay Text -->
  <div class="absolute inset-0 bg-black bg-opacity-0 flex flex-col justify-center items-center text-white text-center px-4">
    {{-- <h1 class="text-3xl md:text-5xl font-bold text-orange-400">Welcome to Tech Develop Zone</h1> --}}
    {{-- <p class="mt-4 text-lg max-w-2xl leading-6 text-gray-300">We provide technology-driven solutions including affiliate products and high-quality digital services.</p> --}}
  </div>
</section>

  <!-- 🛒 Affiliate Product Section -->
  <section class="py-12 px-6 bg-gray-50">
    <h2 class="text-2xl font-semibold text-center mb-8 text-orange-400">Featured Products</h2>
    <div class="grid md:grid-cols-4 grid-cols-3 gap-3 max-w-6xl mx-auto">

      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="image/3.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-2">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Buy Now</a>
        </div>
      </div>


      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="image/3.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-3">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Buy Now</a>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="image/3.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-3">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Buy Now</a>
        </div>
      </div>

      <!-- Product Card -->
      <div class="bg-white rounded-lg shadow-md  text-center">
        <img src="image/3.jpg" alt="Product Name" class="mx-auto mb-4 rounded ">
        <div class="p-3">

          <h3 class="text-lg font-bold mb-2 text-orange-400">Product Title</h3>
          <p class="text-sm mb-4">Short description of the product goes here.</p>
          <a href="#" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Buy Now</a>
        </div>
      </div>


      <!-- Repeat for other products -->
    </div>
  </section>

  <!-- 💼 Digital Services Section -->
  <section class="py-12 px-6">
    <h2 class="text-2xl font-semibold text-center mb-8 text-orange-400">Our Digital Services</h2>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <div class="bg-white border p-6 rounded text-center">
        <h3 class="text-xl font-bold mb-2 text-orange-400">Graphic Design</h3>
        <p>Creative and professional design solutions for brands.</p>
      </div>
      <div class="bg-white border p-6 rounded text-center">
        <h3 class="text-xl font-bold mb-2 text-orange-400">Web Development</h3>
        <p>Responsive, SEO-friendly, and modern web design services.</p>
      </div>
      <div class="bg-white border p-6 rounded text-center">
        <h3 class="text-xl font-bold mb-2 text-orange-400">Social Media Design</h3>
        <p>Custom graphics tailored for platforms like Facebook, Instagram, and more.</p>
      </div>
    </div>
    <div class="text-center mt-8">
      <a href="#" class="view-all bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">View All Services</a>
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
        <div class="w-[250px] h-[300px] flex-shrink-0 rounded shadow-md snap-center bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="image/4.png" alt="Sample 1" class=" object-cover object-top " />
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">📱 UI/UX Design</h3>
            <p class="leading-6 text-gray-600 text-center">Figma-based modern UI design & user-friendly experience.</p>
          </div>
        </div>
        <!-- Slide Item -->
        <div class="w-[250px] h-[300px] flex-shrink-0 rounded shadow-md snap-center bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="image/1.jpg" alt="Sample 1" class=" object-cover object-top " />
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">📱 UI/UX Design</h3>
            <p class="leading-6 text-gray-600 text-center">Figma-based modern UI design & user-friendly experience.</p>
          </div>
        </div>
        <!-- Slide Item -->
        <div class="w-[250px] h-[300px] flex-shrink-0 rounded shadow-md snap-center bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="image/2.jpg" alt="Sample 1" class=" object-cover object-top " />
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">📱 UI/UX Design</h3>
            <p class="leading-6 text-gray-600 text-center">Figma-based modern UI design & user-friendly experience.</p>
          </div>
        </div>
        <!-- Slide Item -->
        <div class="w-[250px] h-[300px] flex-shrink-0 rounded shadow-md snap-center bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="image/4.png" alt="Sample 1" class=" object-cover object-top " />
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">📱 UI/UX Design</h3>
            <p class="leading-6 text-gray-600 text-center">Figma-based modern UI design & user-friendly experience.</p>
          </div>
        </div>
        <!-- Slide Item -->
        <div class="w-[250px] h-[300px] flex-shrink-0 rounded shadow-md snap-center bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="image/3.jpg" alt="Sample 1" class=" object-cover object-top " />
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">📱 UI/UX Design</h3>
            <p class="leading-6 text-gray-600 text-center">Figma-based modern UI design & user-friendly experience.</p>
          </div>
        </div>
        <!-- Slide Item -->
        <div class="w-[250px] h-[300px] flex-shrink-0 rounded shadow-md snap-center bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="image/4.png" alt="Sample 1" class=" object-cover object-top " />
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">📱 UI/UX Design</h3>
            <p class="leading-6 text-gray-600 text-center">Figma-based modern UI design & user-friendly experience.</p>
          </div>
        </div>

        <!-- Add more images as needed -->
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
