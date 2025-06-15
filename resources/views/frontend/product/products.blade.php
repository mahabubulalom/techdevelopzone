@extends('layout')

@section('content')
<section>

        <div class="pb-2">
            <div class="mx-auto max-w-7xl font-quicksand py-4">
                <div class="p-8 bg-slate-100 rounded-3xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300">

                    <h2 class="text-3xl text-center font-bold mb-8">🔥 Trending Products</h2>

                    <div class="carousel-wrapper">
                        <div id="carousel" class="carousel">
                        <!-- Cloned last 2 for infinite effect -->
                        <div class="product"><img src="{{ asset('backend') }}/image/Eufy E28 Omni Robot Vacuum And Mop Combo.jpg"><h3>Eufy E28 Omni Robot Vacuum And Mop Combo</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Bissell Little Green Carpet Cleaner.jpg"><h3>Bissell Little Green Carpet Cleaner</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Fullstar Vegetable Chopper.jpg"><h3>Fullstar Vegetable Chopper</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Dream x50 Ultra  Robot Vacuum.jpg"><h3>Dream x50 Ultra  Robot Vacuum</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Crock-Pot 20-Ounce Electric Lunch Box.jpg"><h3>Crock-Pot 20-Ounce Electric Lunch Box</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Minimalist Digital Clock.jpg"><h3>Minimalist Digital Clock</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Amazon Echo Dot.jpg"><h3>Amazon Echo Dot</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Amazon Fire Max 11.jpg"><h3>Amazon Fire Max 11</h3></div>

                        <!-- Real products -->
                        <div class="product"><img src="{{ asset('backend') }}/image/Eufy E28 Omni Robot Vacuum And Mop Combo.jpg"><h3>Eufy E28 Omni Robot Vacuum And Mop Combo</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Bissell Little Green Carpet Cleaner.jpg"><h3>Bissell Little Green Carpet Cleaner</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Fullstar Vegetable Chopper.jpg"><h3>Fullstar Vegetable Chopper</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Dream x50 Ultra  Robot Vacuum.jpg"><h3>Dream x50 Ultra  Robot Vacuum</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Crock-Pot 20-Ounce Electric Lunch Box.jpg"><h3>Crock-Pot 20-Ounce Electric Lunch Box</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Minimalist Digital Clock.jpg"><h3>Minimalist Digital Clock</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Amazon Echo Dot.jpg"><h3>Amazon Echo Dot</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Amazon Fire Max 11.jpg"><h3>Amazon Fire Max 11</h3></div>

                        <!-- Cloned first 2 for infinite effect -->
                        <div class="product"><img src="{{ asset('backend') }}/image/Eufy E28 Omni Robot Vacuum And Mop Combo.jpg"><h3>Eufy E28 Omni Robot Vacuum And Mop Combo</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Bissell Little Green Carpet Cleaner.jpg"><h3>Bissell Little Green Carpet Cleaner</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Fullstar Vegetable Chopper.jpg"><h3>Fullstar Vegetable Chopper</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Dream x50 Ultra  Robot Vacuum.jpg"><h3>Dream x50 Ultra  Robot Vacuum</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Crock-Pot 20-Ounce Electric Lunch Box.jpg"><h3>Crock-Pot 20-Ounce Electric Lunch Box</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Minimalist Digital Clock.jpg"><h3>Minimalist Digital Clock</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Amazon Echo Dot.jpg"><h3>Amazon Echo Dot</h3></div>
                        <div class="product"><img src="{{ asset('backend') }}/image/Amazon Fire Max 11.jpg"><h3>Amazon Fire Max 11</h3></div>

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
                    <div id="product-container" class="grid grid-cols-2 sm:gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Roborock Z70 Robot Vacuum</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Ring Video Doorbell pro 2</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Amazon Fire tv stick 4k</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Best Mini Kitchen Rack</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Amazon Echo Dot</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Eufy E28 Omni Robot Vacuum And Mop Combo</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Queen Size 4-piece Cooling sheet set</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Stay Cool Anywhere with the Air Choice Portable Air Conditioner</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Crock-Pot 20-Ounce Electric Lunch Box</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Fullstar Vegetable Chopper</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Bissell Little Green Carpet Cleaner</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Stanley Quencher H2.0 (30 oz)</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Minimalist Digital Clock</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Philips Hue Smart Bulbs</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Metal 4 pack magnetic spice storage rack</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Dream x50 Ultra Robot Vacuum</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Dive into Adventure with TUDIVING-0.5L Mini Scuba Tank</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Roborock saros 10r</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Wink Cat Adhesive Hooks (2Pcs, Purple + Green)</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">4-piece Apple AirTag</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Amazon Fire Max 11</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Ice Maker Machine with Handle</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Multifunctional Tissue Box Cover Holder</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Ninja TB401 All-in-One Blender & Food Processor</h3>
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
                                            <h3 class="font-bold text-white capitalize cursor-pointer text-18">Portable Mini Summer Coolers, Electric Drink Cooler</h3>
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
@endsection
