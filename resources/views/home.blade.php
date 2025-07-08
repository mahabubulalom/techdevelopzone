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


  <main class="pt-24">

    <!-- Hero -->
    <section class="bg-white py-20">
      <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold mb-4">We Build Stunning Digital Experiences</h1>
        <p class="text-gray-600 mb-6 leading-relaxed">Modern design meets powerful technology to elevate your brand.</p>
        <a href="#services" class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700">View Our Work</a>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="container mx-auto px-6 py-16">
      <h2 class="text-3xl font-semibold text-center mb-12">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="p-6 bg-white rounded-lg shadow-lg transform hover:-translate-y-2 transition">
          <h3 class="font-bold text-xl mb-3">Brand Strategy</h3>
          <p class="text-gray-600">Define your positioning and voice to stand out in your industry.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-lg transform hover:-translate-y-2 transition">
          <h3 class="font-bold text-xl mb-3">UX & Design</h3>
          <p class="text-gray-600">Craft sleek and intuitive interfaces for web and mobile.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-lg transform hover:-translate-y-2 transition">
          <h3 class="font-bold text-xl mb-3">Web Development</h3>
          <p class="text-gray-600">Scalable and performant websites using latest frameworks.</p>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="bg-gray-100 py-16">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-semibold text-center mb-12">Our Recent Work</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Example project card -->
          <div class="overflow-hidden rounded-lg shadow-lg group">
            <img src="1.jpg" alt="Project 1" class="w-full h-56 object-cover group-hover:scale-105 transition"/>
            <div class="p-6 bg-white">
              <h3 class="font-bold text-xl mb-2">Project Title</h3>
              <p class="text-gray-600">Short description of the project.</p>
            </div>
          </div>
          <!-- Add more project cards -->
        </div>
      </div>
    </section>

    <!-- Team -->
    <section id="team" class="container mx-auto px-6 py-16">
      <h2 class="text-3xl font-semibold text-center mb-12">Meet Our Team</h2>
      <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-8 gap-4">
        <!-- Profile card -->
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <div class="text-center">
          <img src="2.jpg" alt="Team Member" class="mx-auto mb-4 rounded-full w-32 h-32 object-cover"/>
          <h4 class="font-bold">Name</h4>
          <p class="text-gray-500">Role</p>
        </div>
        <!-- ... -->
      </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-white py-16">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-semibold text-center mb-12">What Our Clients Say</h2>
        <div class="space-y-8">
          <div class="p-6 bg-gray-100 rounded-lg shadow">
            <p class="italic text-gray-700">"YourAgency revamped our brand and delivered more traffic than we imagined!"</p>
            <p class="mt-4 font-bold">— Client Name, CEO of Company</p>
          </div>
          <!-- more testimonials -->
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-gray-100 py-16">
      <div class="container mx-auto px-6 max-w-lg">
        <h2 class="text-3xl font-semibold text-center mb-6">Get In Touch</h2>
        <form class="space-y-4 bg-white p-6 rounded-lg shadow">
          <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded"/>
          <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded"/>
          <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-2 border rounded"></textarea>
          <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Send Message</button>
        </form>
      </div>
    </section>

  </main>



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
