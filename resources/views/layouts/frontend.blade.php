<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TechDevelopZone is your trusted source for top-rated Amazon tech products, including smart gadgets, home appliances, and the latest innovations. Explore reviews, features, and affiliate deals tailored for the USA market.">
    <meta name="keywords" content="Amazon tech products, smart gadgets USA, best Amazon deals, home appliances, affiliate tech site, buy tech USA, smart home devices, latest tech gadgets, TechDevelopZone, USA Amazon affiliate">
    <meta name="auther" content="TechDevelopZone">
    <meta name="robots" content="index, follow">

        <!-- Open Graph / Facebook -->
        <!-- Open Graph -->
    <meta property="og:title" content="TechDevelopZone | Top Trending Smart Gadgets" />
    <meta property="og:description" content="Discover trending smart gadgets, top tech, and Amazon bestsellers in one place. Fast, smart, and innovative!" />
    <meta property="og:image" content="https://raw.githubusercontent.com/mahabubulalom/tdz/main/assets/bannar.png" />
    <meta property="og:url" content="https://mahabubulalom.github.io/tdz/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="TechDevelopZone" />

    <!-- Optional preview image -->

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://mahabubulalom.github.io/tdz/">
    <meta name="twitter:title" content="TechDevelopZone | Best Amazon Tech Deals for USA">
    <meta name="twitter:description" content="Explore smart tech gadgets, reviews, and deals on Amazon USA. Shop with confidence via TechDevelopZone.">
    <meta name="twitter:image" content="https://raw.githubusercontent.com/mahabubulalom/tdz/master/image/bannar.png">

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Tech Develop Zone</title>


    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        ul,li{
            list-style-type:none;
        }
        h1,h2,h3,h4,h5,h6,p{
            line-height: 0.8;
        }

    @media(max-width: 768px){
        .container{
            padding: 10px;
        }
        .nav-menu{
            flex-direction: column;
        }
    }

    .carousel-wrapper {
      overflow: hidden;
      max-width: 900px;
      margin: auto;
    }

    .carousel {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .product {
      flex: 0 0 20%;
      background: white;
      border-radius: 0.5rem;
      text-align: center;
      padding: 1rem;
      opacity: 0.5;
      transform: scale(0.85);
      transition: all 0.3s ease;
    }

    .product.active {
      transform: scale(1.15);
      opacity: 1;
      z-index: 10;
      box-shadow: 0 8px 15px rgb(0 0 0 / 0.2);
    }

    .product img {
      width: 100%;
      border-radius: 0.375rem;
      margin-bottom: 0.5rem;
    }


/* faq css */
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
    }
    .accordion-content.open {
      max-height: 300px; /* enough height for most answers */
    }

    </style>
</head>
<body class=" mx-auto bg-gray-200 ">
{{-- max-w-7xl --}}
    {{-- <header class="bg-white shadow border-b border-b-gray-200">
        <div class="container mx-auto px-3 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-orange-500">Tech Develop Zone</h1>
            <nav>
                <ul class="flex space-x-3 text-gray-700">
                     <li>
                        <a href="{{ route('home') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Home
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/products') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Product
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sarvices') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Service
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/reviews') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Reviews
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                About
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/blogs') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Blog
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Contact
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header> --}}

    {{-- social info section --}}
    {{-- <section>
        <div class="">
            <div class="mx-auto  font-quicksand py-">
                <div class="p-1 bg-gray-300  shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300">
                    <div class=" mx-auto text-center">
                        <div class="text-center mx-auto ">
                            <h2 class="text-4xl text-center font-medium text-black ">Welcome to <span class="text-4xl text-center font-medium text-orange-400" >Tech Develop Zone</span></h2>
                            <h2 class="font-medium text-3xl leading-10 font-quicksand text-orange-400 py-2 ">Chouse your amazon products</h2>
                            <p class="mt-4 text-lg  leading-6 text-gray-300">We provide technology-driven solutions including affiliate products and high-quality digital services.</p>
                        </div>
                    </div>
                    <div class="flex justify-center gap-3 flex-wrap">
                        <a href="{{ url('/reviews') }}"  class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Reviews
                            </span>
                        </a>
                        <a href="https://www.facebook.com/share/1EpSR4j9dB/" target="_blank" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Facebook
                            </span>
                        </a>
                        <a href="https://www.tiktok.com/@tech.develop.zone?_t=ZS-8wb3uMXYtIG&_r=1" target="_blank" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                TikTok
                            </span>
                        </a>
                        <a href="https://www.instagram.com/techdevelopzone?igsh=MXU2NDQwZTNmc3ZhaA==" target="_blank" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Instagram
                            </span>
                        </a>
                        <a href="https://youtube.com/@techdevelopzone?si=z3csefc0EZdtw66M" target="_blank" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                YouTube
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}




<!-- Header -->
<header class="fixed top-0 left-0 w-full bg-gray-800 text-white z-50 shadow-md">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-3">

    <!-- Logo -->
    <div class="text-xl font-bold text-yellow-400">Tech Develop Zone</div>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center space-x-6 text-sm">
      <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
      <a href="#" class="hover:text-yellow-400">About</a>
      <a href="{{ url('/sarvices') }}" class="hover:text-yellow-400">Service</a>
      <a href="#" class="hover:text-yellow-400">Portfolio</a>
      <a href="#" class="hover:text-yellow-400">Price</a>
      <a href="{{ url('/products') }}" class="hover:text-yellow-400">Products</a>
      <a href="{{ url('/reviews') }}" class="hover:text-yellow-400">Reviews</a>
      <a href="{{ url('/blogs') }}" class="hover:text-yellow-400">Blog</a>
    </nav>

    <!-- Social Icons -->
    <div class="hidden md:flex items-center space-x-4 text-yellow-400 text-lg">
      <a href="https://www.facebook.com/share/1EpSR4j9dB/"><i class="fab fa-facebook-f hover:text-white"></i></a>
      <a href="https://www.tiktok.com/@tech.develop.zone?_t=ZS-8wb3uMXYtIG&_r=1"><i class="fab fa-tiktok hover:text-white"></i></a>
      <a href="https://www.instagram.com/techdevelopzone?igsh=MXU2NDQwZTNmc3ZhaA=="><i class="fab fa-instagram hover:text-white"></i></a>
      <a href="https://youtube.com/@techdevelopzone?si=z3csefc0EZdtw66M"><i class="fab fa-youtube hover:text-white"></i></a>
    </div>

    <!-- Contact Button -->
    <a href="{{ url('/contact') }}" class="hidden md:inline-block bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded hover:bg-yellow-400 ml-4">
      Contact Us
    </a>

    <!-- Hamburger Icon (Mobile) -->
    <div class="md:hidden text-yellow-400 text-2xl cursor-pointer" onclick="toggleMenu()">
      <i class="fas fa-bars"></i>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 bg-gray-800 space-y-3 text-sm">
    <a href="{{ route('home') }}" class="block text-white hover:text-yellow-400">Home</a>
    <a href="#" class="block text-white hover:text-yellow-400">About</a>
    <a href="{{ url('/sarvices') }}" class="block text-white hover:text-yellow-400">Service</a>
    <a href="#" class="block text-white hover:text-yellow-400">Portfolio</a>
    <a href="#" class="block text-white hover:text-yellow-400">Price</a>
    <a href="{{ url('/products') }}" class="block text-white hover:text-yellow-400">Products</a>
    <a href="{{ url('/reviews') }}" class="block text-white hover:text-yellow-400">Reviews</a>
    <a href="{{ url('/blogs') }}" class="block text-white hover:text-yellow-400">Blog</a>
    <div class="flex space-x-4 mt-4 text-yellow-400 text-lg">
      <a href="https://www.facebook.com/share/1EpSR4j9dB/"><i class="fab fa-facebook-f hover:text-white"></i></a>
      <a href="https://www.tiktok.com/@tech.develop.zone?_t=ZS-8wb3uMXYtIG&_r=1"><i class="fab fa-tiktok hover:text-white"></i></a>
      <a href="https://www.instagram.com/techdevelopzone?igsh=MXU2NDQwZTNmc3ZhaA=="><i class="fab fa-instagram hover:text-white"></i></a>
      <a href="https://youtube.com/@techdevelopzone?si=z3csefc0EZdtw66M"><i class="fab fa-youtube hover:text-white"></i></a>
    </div>
  </div>
</header>

<!-- Offset for fixed header -->
<div class="mt-16"></div>

<!-- JavaScript Toggle header -->
<script>
  function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
  }
</script>








        @yield('content')








  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-200 py-12 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8 text-sm">

      <!-- Logo & Desc -->
      <div>
        <h3 class="text-white font-bold text-xl mb-3">Innovate</h3>
        <p class="mb-3 leading-6">We all are Demo Templates With A Single Code. You Can See Benefits All The Demo & Templates.</p>
        <p class="text-xs text-gray-600">©2025 Innovate. All Rights Reserved.</p>
      </div>

      <!-- Features -->
      <div>
        <h4 class="text-white font-semibold mb-3">Features</h4>
        <ul class="space-y-2">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Pricing</a></li>
        </ul>
      </div>

      <!-- Products -->
      <div>
        <h4 class="text-white font-semibold mb-3">Products</h4>
        <ul class="space-y-2">
          <li><a href="#">Task Management</a></li>
          <li><a href="#">Company Growth</a></li>
          <li><a href="#">Time Tracking</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <h4 class="text-white font-semibold mb-3">Support</h4>
        <ul class="space-y-2">
          <li><a href="#">Customer Service</a></li>
          <li><a href="#">Accessibility</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

    </div>

    <div class="text-center text-xs text-gray-600 mt-8">
      <a href="#" class="hover:underline">Privacy Policy</a> •
      <a href="#" class="hover:underline">Terms & Conditions</a>
    </div>
  </footer>

    <footer class="bg-gray-700 shadow ">
        <div class="container mx-auto px-6 py-1 text-center text-gray-200">
            &copy; 2025 <a href="{{ route('admin.panel') }}" class="text-blue-400">Tech Develop Zone.</a>  All rights reserved.
        </div>
    </footer>

    <script src="{{ asset('backend') }}/js/script.js"></script>
    <script src="https://kit.fontawesome.com/8abab984f3.js" crossorigin="anonymous"></script>


</body>
</html>
