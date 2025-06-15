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
    </style>
</head>
<body class="max-w-7xl mx-auto bg-sky-200 ">

    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-orange-500">Tech Develop Zone</h1>
            <nav>
                <ul class="flex space-x-6 text-gray-700">
                    <li><a href="" class="hover:text-orange-500">Home</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-orange-500">Product</a></li>
                    <li><a href="#" class="hover:text-orange-500">Service</a></li>
                    <li><a href="{{ route('videos') }}" class="hover:text-orange-500">Reviews</a></li>
                    <li><a href="#" class="hover:text-orange-500">About</a></li>
                    <li><a href="{{ route('blogs') }}" class="hover:text-orange-500">Blog</a></li>
                    <li><a href="#" class="hover:text-orange-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

<section>
        <div class="pb-2">
            <div class="mx-auto max-w-7xl font-quicksand py-4">
                <div class="p-8 bg-slate-100 rounded-3xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300">
                    <div class=" mx-auto text-center">
                        <div class="text-center mx-auto ">
                            <h2 class="text-4xl text-center font-medium text-black ">Welcome to <span class="text-4xl text-center font-medium text-orange-400" >Tech Develop Zone</span></h2>
                            <h2 class="font-medium text-3xl leading-10 font-quicksand text-orange-400 py-2 ">Chouse your amazon products</h2>
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
    </section>



         @yield('content')



         <footer class="bg-white shadow mt-16">
        <div class="container mx-auto px-6 py-6 text-center text-gray-600">
            &copy; 2025 Tech Develop Zone. All rights reserved.
        </div>
    </footer>

    <script src="{{ asset('backend') }}/js/script.js"></script>
    <script src="https://kit.fontawesome.com/8abab984f3.js" crossorigin="anonymous"></script>
</body>
</html>
