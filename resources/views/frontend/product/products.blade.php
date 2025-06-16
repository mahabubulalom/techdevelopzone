@extends('layouts.frontend')

@section('content')
    <section>

        <div class="pb-2">
            <div class="mx-auto max-w-7xl font-quicksand py-4">
                <div class="p-8 bg-slate-100 rounded-3xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300">

                    <h2 class="text-3xl text-center font-bold mb-8">🔥 Trending Products</h2>

                    <div class="carousel-wrapper">
                        <div id="carousel" class="carousel">

                            <!-- Cloned last 2 for infinite effect -->
                            <!-- Slide Item -->
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Eufy E28 Omni Robot Vacuum And Mop Combo.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>

                            <!-- Real products -->
                            <!-- Slide Item -->
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Eufy E28 Omni Robot Vacuum And Mop Combo.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>


                            <!-- Cloned first 2 for infinite effect -->
                            <!-- Slide Item -->
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>
                            <div class="product bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                                <img class="w-full  object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                <h3 class="text-xl font-semibold mb-2 text-orange-400 text-center">🎬 Video Editing</h3>
                                <p class="leading-6 text-gray-600 text-center">YouTube videos, reels, intros & motion graphics editing.</p>
                            </div>

                        </div>
                    </div>

                    <div class="flex justify-center gap-4 mt-6">
                        <button id="prevBtn" class="px-4 py-2 bg-orange-400 text-white rounded hover:bg-orange-500">← Prev</button>
                        <button id="nextBtn" class="px-4 py-2 bg-orange-400 text-white rounded hover:bg-orange-500">Next →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- 📦 Sample Deliveries Section -->
    <section>
        <div class="pb-28">
            <div class="mx-auto max-w-7xl font-quicksand py-4">
                <div class="p-8 bg-slate-100 rounded-3xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300">
                    <div class="flex justify-center  mb-4 gap-3 flex-wrap">
                        <button onclick="filterByCategory('all')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300 capitalize">
                                all
                            </span>
                        </button>
                        <button onclick="filterByCategory('electronics')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300 capitalize">
                                electronics
                            </span>
                        </button>
                        <button onclick="filterByCategory('gadget')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300 capitalize">
                                gadget
                            </span>
                        </button>
                        <button onclick="filterByCategory('home')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300 capitalize">
                                Home
                        </button>
                        <button onclick="filterByCategory('kitchen')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                kitchen
                            </span>
                        </button>
                        <button onclick="filterByCategory('travel')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                travel
                            </span>
                        </button>
                        <button onclick="filterByCategory('fashion')" class="category-btn group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                fashion
                            </span>
                        </button>
                    </div>
                    <!-- <div id="product-container" class=" grid grid-cols-4 gap-4"> -->
                    <div id="product-container" class="grid grid-cols-2 sm:gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no images">
                                    <a href="https://amzn.to/43KGSwU" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Roborock Z70 Robot Vacuum</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="home">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                                    <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Ring Video Doorbell pro 2</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Amazon Fire tv stick 4k.jpg" alt="no images">
                                    <a href="https://amzn.to/3FnwPET" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Gadget</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Amazon Fire tv stick 4k</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Best Mini Kitchen Rack.jpg" alt="no images">
                                    <a href="https://amzn.to/4jwY0Lz" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">kitchen</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Best Mini Kitchen Rack</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Amazon Echo Dot.jpg" alt="no images">
                                    <a href="https://amzn.to/3SecEvY" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Amazon Echo Dot</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Eufy E28 Omni Robot Vacuum And Mop Combo.jpg" alt="no images">
                                    <a href="https://amzn.to/3H5lABv" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Eufy E28 Omni Robot Vacuum And Mop Combo</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="home">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-6s overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Queen Size 4-piece Cooling sheet set.jpg" alt="no images">
                                    <a href="https://amzn.to/3S6F8Yu" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Queen Size 4-piece Cooling sheet set</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Stay Cool Anywhere with the Air Choice Portable Air Conditioner.jpg" alt="no images">
                                    <a href="https://amzn.to/4jvJXG7" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Stay Cool Anywhere with the Air Choice Portable Air Conditioner</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Crock-Pot 20-Ounce Electric Lunch Box.jpg" alt="no images">
                                    <a href="https://amzn.to/3Fh0z6b" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">kitchen</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Crock-Pot 20-Ounce Electric Lunch Box</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Fullstar Vegetable Chopper.jpg" alt="no images">
                                    <a href="https://amzn.to/3GXGTVv" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">kitchen</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Fullstar Vegetable Chopper</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Bissell Little Green Carpet Cleaner.jpg" alt="no images">
                                    <a href="https://amzn.to/4jYVM8H" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Bissell Little Green Carpet Cleaner</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Stanley Quencher H2.0 (30 oz).jpg" alt="no images">
                                    <a href="https://amzn.to/3EWk1VT" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">kitchen</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Stanley Quencher H2.0 (30 oz)</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Minimalist Digital Clock.jpg" alt="no images">
                                    <a href="https://amzn.to/4jeC0EX" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">gadget</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Minimalist Digital Clock</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Philips Hue Smart Bulbs.jpg" alt="no images">
                                    <a href="https://amzn.to/3GV53QA" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">gadget</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Philips Hue Smart Bulbs</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Metal 4 pack magnetic spice storage rack.jpg" alt="no images">
                                    <a href="https://amzn.to/4jyO0RW" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">kitchen</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Metal 4 pack magnetic spice storage rack</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Dream x50 Ultra  Robot Vacuum.jpg" alt="no images">
                                    <a href="https://amzn.to/3SkAiqK" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Dream x50 Ultra Robot Vacuum</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="travel">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Dive into Adventure with TUDIVING-0.5L Mini Scuba Tank.jpg" alt="no images">
                                    <a href="https://amzn.to/3SxY8PU" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">travel</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Dive into Adventure with TUDIVING-0.5L Mini Scuba Tank</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Roborock saros 10r.jpg" alt="no images">
                                    <a href="https://amzn.to/43GUR6V" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Roborock saros 10r</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="home">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Wink Cat Adhesive Hooks (2Pcs, Purple + Green).jpg" alt="no images">
                                    <a href="https://amzn.to/4eaHL5T" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">home</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Wink Cat Adhesive Hooks (2Pcs, Purple + Green)</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Apple AirTag.jpg" alt="no images">
                                    <a href="https://amzn.to/4jTP8AE" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">gadget</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">4-piece Apple AirTag</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Amazon Fire Max 11.jpg" alt="no images">
                                    <a href="https://amzn.to/3SdhedP" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Amazon Fire Max 11</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ice Maker Machine with Handle.jpg" alt="no images">
                                    <a href="https://amzn.to/4mvjP0C" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Ice Maker Machine with Handle</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Multifunctional Tissue Box Cover Holder.jpg" alt="no images">
                                    <a href="https://amzn.to/3Z0Omt6" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">gadget</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Multifunctional Tissue Box Cover Holder</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ninja TB401 All-in-One Blender & Food Processor.jpg" alt="no images">
                                    <a href="https://amzn.to/3SU9oGh" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">kitchen</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Ninja TB401 All-in-One Blender & Food Processor</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="product-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Portable Mini Summer Coolers, Electric Drink Cooler.jpg" alt="no images">
                                    <a href="https://amzn.to/3HvIvpB" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                        <div class="flex justify-between w-full mb-2">
                                            <div class="flex align-center ">
                                                <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">electronics</h3>
                                            </div>
                                            <div class="flex my-auto">
                                                <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                     <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                                    <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                                </strong>
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6  leading-6">Portable Mini Summer Coolers, Electric Drink Cooler</h3>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center  mt-8 ">
                        <button id="prev-btn" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Prevew
                            </span>
                        </button>
                        <span id="page-indicator" class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300 py-2 px-4">
                            page: 1
                        </span>
                        <button id="next-btn" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Next
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- 📦 Sample Deliveries Section -->
    <section class="py-12 px-6 bg-gray-50">
        <h2 class="text-2xl font-semibold text-center mb-8">Sample Deliveries</h2>

        <!-- Slider Container -->
        <div class="relative max-w-6xl mx-auto">

            <!-- Slider -->
            <div id="slider" class="flex overflow-x-auto gap-4 scroll-smooth snap-x snap-mandatory">

                <!-- Slide Item -->
                <div id="" class="w-[250px] flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class="w-[250px] flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class="w-[250px] flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class="w-[250px] flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class="w-[250px] flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div id="" class=" flex-shrink-0 rounded shadow-md snap-center" data-category="home">
                    <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                        <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                            <img class="w-full h-full object-cover transition-all duration-300 bg-cover align-middle" src="{{ asset('backend') }}/image/Ring Video Doorbell pro 2.jpg" alt="no images">
                            <a href="https://amzn.to/3EQVdi1" target="_blank" class="px-4 py-5 absolute bg-orange-400 left-0 top-0 h-full w-full flex flex-col justify-center items-center text-center opacity-0 transition-all duration-300 group-hover:opacity-70">
                                <div class="flex justify-between w-full mb-2">
                                    <div class="flex align-center ">
                                        <h3 class="font-bold text-yellow-400 capitalize my-auto text-14 ">Home</h3>
                                    </div>
                                    <div class="flex my-auto">
                                        <strong class="font-bold text-a13 text-orange-400 flex align-center">





                                                <i class="fa-solid fa-star text-base text-yellow-400 mr-0.5 my-auto"></i>
                                            <span class="p-1  bg-orange-500 rounded text-white font-bold">4.5</span>

                                        </strong>
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="font-bold text-white capitalize cursor-pointer text-18  leading-6">Ring Video Doorbell pro 2</h3>
                                </div>

                            </a>
                        </div>
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


@endsection
