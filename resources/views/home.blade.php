@extends('layouts.frontend')

@section('content')


  <!-- Hero Section -->
  <section class="bg-gray-700 text-white py-20 px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

      <!-- Left Text Content -->
      <div>
        <h3 class="text-yellow-400 text-xl font-semibold mb-2">WELCOME!</h3>
        <h1 class="text-3xl md:text-4xl font-bold mb-4">The Best Services</h1>
        <p class="text-sm md:text-base text-gray-200 mb-6">
          We use quality products and the latest styling techniques to bring out your very best.
          We promise to provide you with 5-star service.
        </p>
        <a href="{{ url('/products') }}" class="bg-yellow-500 text-gray-900 font-semibold px-5 py-2 rounded hover:bg-yellow-400">
          Make Ordar
        </a>
      </div>

      <!-- Right Image Placeholder -->
      <div class="h-52 bg-gray-300 rounded-md overflow-hidden">
          <img src="{{ asset('backend') }}/image/tech-develop-zone.jpg" alt="no image" class="w-full h-full ">
      </div>
    </div>
  </section>

  <!-- Service Section -->
  <section class="bg-white py-16 px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <!-- Image Layout Left -->
      <div class="grid grid-cols-2 gap-4">
        <div class="space-y-4">
          <div class="h-24 bg-gray-300 rounded"></div>
          <div class="h-24 bg-gray-300 rounded"></div>
        </div>
        <div class="h-52 bg-gray-400 rounded"></div>
      </div>

      <!-- Right Content -->
      <div>
        <h2 class="text-2xl font-bold mb-4">We're Here To Service Your Degital product </h2>
        <p class="text-sm text-gray-600 mb-6">
          We provide modern digital solutions to help your business grow. From web development and branding to digital marketing and strategy — we deliver results that matter.
        </p>
        <a href="{{ url('/about') }}" class="bg-yellow-500 text-gray-900 font-semibold px-5 py-2 rounded hover:bg-yellow-400">
          Learn More
        </a>
      </div>
    </div>
  </section>


  <!-- Our Services Section -->
  <section class="py-12 px-6 max-w-5xl mx-auto text-center">
    <h2 class="text-3xl font-semibold mb-4">Our Services</h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-10 leading-5">
      Whether you are looking for a quick beach side getaway or a pampering day for yourself, we have the treatments to meet your needs. All of our services are specially designed for restoration, recovery and relaxation.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
      <!-- Graphic Design -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">🎨 Graphic Design</h3>
          <p class="leading-6 text-sm text-gray-600 ">Custom logos, branding, social media graphics, and more to make your business visually stunning.</p>
        </div>

      <!-- Digital Marketing -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">📢 Digital Marketing</h3>
          <p class="leading-6 text-sm text-gray-600 ">Strategic campaigns across social media, email, and PPC to grow your online presence.</p>
        </div>

      <!--  Web Design -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">💻 Web Design</h3>
          <p class="leading-6 text-sm text-gray-600 ">Creative and responsive website designs that capture attention and convert visitors.</p>
        </div>

      <!-- Web Development -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">🛠 Web Development</h3>
          <p class="leading-6 text-sm text-gray-600 ">Custom-built websites and applications with performance and scalability in mind.</p>
        </div>

      <!-- UI/UX Design -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">📱 UI/UX Design</h3>
          <p class="leading-6 text-sm text-gray-600 ">User-centered design that delivers seamless and intuitive digital experiences.</p>
        </div>

      <!-- Clipping Path -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">✂️ Clipping Path</h3>
          <p class="leading-6 text-sm text-gray-600 ">High-quality image editing, background removal, and product photo enhancement for e-commerce.</p>
        </div>

      <!-- Social Media Marketing -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">📈 Social Media Marketing</h3>
          <p class="leading-6 text-sm text-gray-600 ">Facebook ads, Instagram marketing, email campaigns, Google Ads.</p>
        </div>

      <!-- Amazon Marketing -->
        <div class=" rounded-lg p-1 shadow hover:shadow-xl transition">
          <h3 class="text-lg font-semibold mb-2 text-gray-800 ">🛒 Amazon Marketing</h3>
          <p class="leading-6 text-sm text-gray-600 ">Product listing optimization, A+ content, Amazon PPC & store management for higher conversions.</p>
        </div>


      <!-- Video Editing -->
      {{-- <div>
        <h3 class="font-semibold text-lg mb-1">🎬 Video Editing</h3>
        <p class="text-sm text-gray-600 mb-1">YouTube videos, reels, intros & motion graphics editing.</p>
        <span class="text-yellow-600 font-bold">$20</span>
      </div> --}}

    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="bg-gray-50 py-12 px-6">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <!-- Text Content -->
        <div>
            <h2 class="text-2xl font-semibold mb-6">Why Choose Us</h2>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>What services do you offer?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    We offer a wide range of digital services including web design and development, digital marketing, SEO, social media management, branding, and graphic design.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>How much do your services cost?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    Our pricing depends on the scope and complexity of the project. We offer custom quotes after understanding your business goals and requirements. Contact us for a free consultation.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>How long does it take to complete a project?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    It depends on the size and type of project. A basic website may take 1–2 weeks, while a full branding and marketing package can take 3–6 weeks. We always provide a clear timeline before starting.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>Do you provide support after project completion?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    Yes, we offer ongoing maintenance and support packages to keep your website or campaigns running smoothly after launch.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>Can you redesign my existing website?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    Absolutely! We specialize in modernizing outdated websites with improved design, performance, and SEO.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>Will my website be mobile-friendly?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    Yes. All our websites are fully responsive and optimized for mobile, tablet, and desktop devices.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>Do you work with small businesses/startups?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    Yes! Whether you're just starting out or scaling up, we tailor solutions to fit your goals and budget.
                </p>
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="border-b pb-4">
                <button class="faq-toggle w-full flex justify-between items-center text-left text-lg font-medium text-gray-800 focus:outline-none">
                <span><i class="fas fa-circle-question text-indigo-500 mr-2"></i>How do I get started?</span>
                <i class="fas fa-chevron-down transition-transform duration-300 text-gray-600"></i>
                </button>
                <div class="accordion-content mt-2 text-gray-600">
                <p class="pt-2 leading-6">
                    Simply contact us through our form or email, and we’ll set up a free consultation to discuss your needs.
                </p>
                </div>
            </div>
        </div>

      <!-- Placeholder Image Area -->
      <div class="relative">
        {{-- <div class="w-40 h-40 bg-gray-300 absolute top-0 left-10 z-10"></div> --}}
        <div class="w- h-80 bg-gray-400 relative z-0"></div>
      </div>
    </div>
  </section>

  <!-- Work Showcase Section -->
  <section class="bg-gray-900 py-12 px-6 text-white">
    <div class="max-w-6xl mx-auto">
      <div class="flex flex-wrap justify-between items-center mb-8">
        <h2 class="text-2xl font-bold">Work Showcase</h2>
        <div class="flex space-x-6 text-sm font-medium">
          <a href="#" class="text-yellow-500">Graphics</a>
          <a href="#">Web Design</a>
          <a href="#">Web Development</a>
          <a href="#">Degital marketing</a>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="h-56 bg-gray-300"></div>
        <div class="h-56 bg-gray-400"></div>
        <div class="h-56 bg-gray-300"></div>
      </div>
    </div>
  </section>

  <!-- Our Product Section -->
    <section class="py-16 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Our Product</h2>
            <div class="flex space-x-2">
                <button id="prevBtn" class="bg-yellow-500 text-white px-3 py-1 rounded">←</button>
                <button id="nextBtn" class="bg-yellow-500 text-white px-3 py-1 rounded">→</button>
            </div>
            </div>

            <!-- Scrollable Container -->
            <div id="productSlider" class="flex overflow-x-auto space-x-6 scroll-smooth">
            <!-- Product 1 -->
            <div class="min-w-[250px] bg-gray-100 p-4 shrink-0">
                <div class="h-40 bg-gray-300 mb-4"></div>
                <h3 class="text-sm font-semibold">Hair Lotion</h3>
                <p class="text-yellow-600 font-bold text-sm">$72.00</p>
                <p class="text-xs text-gray-500">4.3 reviews</p>
            </div>

            <!-- Product 2 -->
            <div class="min-w-[250px] bg-gray-100 p-4 shrink-0">
                <div class="h-40 bg-gray-300 mb-4"></div>
                <h3 class="text-sm font-semibold">Hair Shampoo</h3>
                <p class="text-yellow-600 font-bold text-sm">$48.00</p>
                <p class="text-xs text-gray-500">4.9 reviews</p>
            </div>

            <!-- Product 3 -->
            <div class="min-w-[250px] bg-yellow-100 p-4 border-2 border-yellow-500 shrink-0">
                <div class="h-40 bg-gray-300 mb-4"></div>
                <h3 class="text-sm font-semibold">Hair Serum</h3>
                <p class="text-yellow-600 font-bold text-sm">$210.00</p>
                <p class="text-xs text-gray-500">4.8 reviews</p>
                <button class="mt-2 text-xs bg-yellow-600 text-white px-3 py-1 rounded">Add to cart</button>
            </div>

            <!-- Product 4 -->
            <div class="min-w-[250px] bg-gray-100 p-4 shrink-0">
                <div class="h-40 bg-gray-300 mb-4"></div>
                <h3 class="text-sm font-semibold">Hair Treatment</h3>
                <p class="text-yellow-600 font-bold text-sm">$59.00</p>
                <p class="text-xs text-gray-500">4.0 reviews</p>
            </div>

            </div>
        </div>
    </section>

  <!-- Meet Our Team Section -->
  <section class="bg-gray-50 py-16 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <!-- Image and Highlight -->
      <div class="relative">
        <div class="w-48 h-48 bg-gray-300 absolute -top-4 -left-4 border-2 border-yellow-400 z-0"></div>
        <div class="w-64 h-64 bg-gray-400 relative z-10 flex items-end justify-center text-white font-bold text-lg p-4">
          <div>
            Jenny Wilson<br>
            <span class="text-sm font-normal text-yellow-300">CEO of DigitalVision</span>
          </div>
        </div>
      </div>

      <!-- Text -->
      <div>
        <h2 class="text-2xl font-bold mb-4">Meet Our Team</h2>
        <p class="text-gray-600 mb-6 text-sm leading-relaxed">
          House of Hair Salon & Spa is one of Brooklyn’s most trusted salons. Whether you’re looking for a completely new style or want to enhance your existing look, our talented team are here to make it happen.
        </p>
        <div class="flex space-x-4">
          <div class="w-16 h-16 bg-gray-300"></div>
          <div class="w-16 h-16 bg-gray-300"></div>
          <div class="w-16 h-16 bg-gray-300"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section -->
  <section class="py-16 px-6 text-center">
    <h2 class="text-3xl font-bold mb-12">Testimonial</h2>
    <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto text-left">

      <!-- Testimonial 1 -->
      <div class="bg-white border border-gray-200 p-6 rounded shadow-sm">
        <div class="text-yellow-500 text-3xl leading-none mb-4">“</div>
        <p class="text-sm text-gray-600 mb-4">
          A very nice massage experience, although I realized while paying that I seemed to have been shorted by about 10 minutes, which was disappointing.
        </p>
        <div class="flex items-center mt-6">
          <img src="https://i.pravatar.cc/50?img=1" class="w-10 h-10 rounded-full mr-4" alt="Juliana">
          <div>
            <p class="font-semibold">Juliana Saucedo</p>
            <p class="text-xs text-gray-500">Joypull Inc</p>
            <div class="text-yellow-500 text-sm mt-1">★★★★★</div>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white border border-gray-200 p-6 rounded shadow-sm">
        <div class="text-yellow-500 text-3xl leading-none mb-4">“</div>
        <p class="text-sm text-gray-600 mb-4">
          Friendly folks, professional work, and excellent customer service - what I loved most as someone who was using a coupon is that they informed me.
        </p>
        <div class="flex items-center mt-6">
          <img src="https://i.pravatar.cc/50?img=2" class="w-10 h-10 rounded-full mr-4" alt="Cristal">
          <div>
            <p class="font-semibold">Cristal Travis</p>
            <p class="text-xs text-gray-500">Google Inc</p>
            <div class="text-yellow-500 text-sm mt-1">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- Blog Section -->
    <section class="py-16 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Our Latest Blog</h2>
        <div class="flex space-x-2">
            <button id="blogPrevBtn" class="bg-yellow-500 text-white px-3 py-1 rounded">←</button>
            <button id="blogNextBtn" class="bg-yellow-500 text-white px-3 py-1 rounded">→</button>
        </div>
        </div>

        <!-- Scrollable Blog Container -->
        <div id="blogSlider" class="flex overflow-x-auto space-x-6 scroll-smooth">
        <!-- Blog 1 -->
        <div class="min-w-[300px] bg-white rounded border shadow-sm overflow-hidden shrink-0">
            <div class="h-40 bg-gray-300"></div>
            <div class="p-4">
            <div class="text-xs text-yellow-600 font-semibold mb-1">02 Aug</div>
            <h3 class="font-semibold text-sm mb-1">Five Tips for your Skin & Hair</h3>
            <p class="text-xs text-gray-500 mb-3">By John • 5 Comments</p>
            <a href="#" class="text-yellow-600 text-xs font-medium">Read More →</a>
            </div>
        </div>

        <!-- Blog 2 -->
        <div class="min-w-[300px] bg-white border-2 border-yellow-400 rounded shadow-sm overflow-hidden shrink-0">
            <div class="h-40 bg-gray-300"></div>
            <div class="p-4">
            <div class="text-xs text-yellow-600 font-semibold mb-1">02 Aug</div>
            <h3 class="font-semibold text-sm mb-1">We'll protect You, because nobody…</h3>
            <p class="text-xs text-gray-500 mb-3">By John • 5 Comments</p>
            <a href="#" class="text-yellow-600 text-xs font-medium">Read More →</a>
            </div>
        </div>

        <!-- Blog 3 -->
        <div class="min-w-[300px] bg-white rounded border shadow-sm overflow-hidden shrink-0">
            <div class="h-40 bg-gray-300"></div>
            <div class="p-4">
            <div class="text-xs text-yellow-600 font-semibold mb-1">02 Aug</div>
            <h3 class="font-semibold text-sm mb-1">How your hair will be grow Fast</h3>
            <p class="text-xs text-gray-500 mb-3">By Julie • 5 Comments</p>
            <a href="#" class="text-yellow-600 text-xs font-medium">Read More →</a>
            </div>
        </div>

        </div>
    </div>
    </section>











    <!-- JavaScript for Blog Slider -->
    <script>
        const blogSlider = document.getElementById('blogSlider');
        const blogNextBtn = document.getElementById('blogNextBtn');
        const blogPrevBtn = document.getElementById('blogPrevBtn');

        const blogScrollAmount = 700;

        blogNextBtn.addEventListener('click', () => {
            blogSlider.scrollBy({ left: blogScrollAmount, behavior: 'smooth' });
        });

        blogPrevBtn.addEventListener('click', () => {
            blogSlider.scrollBy({ left: -blogScrollAmount, behavior: 'smooth' });
        });
    </script>


      <!-- FAQ Toggle Script -->
    <script>
        const toggles = document.querySelectorAll('.faq-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('i.fas.fa-chevron-down');

                // Toggle accordion content
                content.classList.toggle('open');

                // Rotate the icon
                icon.classList.toggle('rotate-180');
            });
        });
    </script>


    <!-- JavaScript product slider -->
    <script>
        const slider = document.getElementById('productSlider');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');

        const scrollAmount = 700;

        nextBtn.addEventListener('click', () => {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    </script>


@endsection

