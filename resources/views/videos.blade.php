@extends('layouts.frontend')

@section('content')
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

                        <div id="product-item" class="reviews-card" data-category="kitchen" >
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full text-16" src="https://www.youtube.com/embed/PUQrv0MGTsI?si=995P5YB-qOG657FG" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="travel">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/SDIUARZ5TfA?si=eEVr-MUrwgKEU5KQ" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/n2wfuXvNjKs?si=LqsLgjX7bBwvUArR" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/ugR_KHG_8hA?si=ElN_0FrLa5zR9aOS" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/ROtMgmfeeMM?si=0OWqN0sT_OsTqZYw" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/fjaQ30JQYpc?si=f2uDk3Fu5OZEVBXX" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Z2tiadru8l4?si=34BMIqdOP5FnYOlU" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/0pP8P9gKXis?si=vaQnu5oSVfuPFqO9" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="home">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/y977P8CmmtQ?si=vmnKuOyQVd7109Dx" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="home">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/dZf9NViJEeg?si=849iPbUYGd2dE5Eb" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/UqyRw6s2edk?si=IstfjvqLkq5Cd1IA" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/wn2dat0X5pE?si=eN0AAcY2-39l40pq" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="kitchen">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/cxL6aQoXuAM?si=s-AkAO83j-v2UE4N" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/bE9WG1nwglQ?si=xhbB28JszaxDBLiL" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/ZXSPTxKAU-g?si=xyhFCeixo6vDvvbN" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="home">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/EFz56x-QuGo?si=2FE9n_a3mXOiSjtR" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="gadget">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/mkVAjI4-42w?si=QdHwuqY9pb8JttxY" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/eynUcmLyx8I?si=nEyWiIbiXis0NKrZ" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/siEDq_p4dCc?si=rYHFI5-BLZrIoS7p" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Hf-_08x_5Ys?si=qUtYEb-QDfAsa-EU" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/sbVWYB284H4?si=aPaTL-UHJbdmANX8" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/qAeqlNmvw98?si=lV35i1JoByGY64R9" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <div id="product-item" class="reviews-card" data-category="electronics">
                            <div class="my- border-2 bg-white rounded-xl shadow-boxshadow hover:shadow-boxshadow2 transition-all duration-300 overflow-hidden  ">
                                <div class=" overflow-hidden w-full sm:h-40 md:h-80 lg:h-80 relative group">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/EcKRn3ObVGQ?si=-x_co-IIkhjn0i_D" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center  mt-8 ">
                        <button id="review-prev-btn" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
                            <span class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300">
                                Prevew
                            </span>
                        </button>
                        <span id="review-page-indicator" class="text-16 text-orange-400 font-semibold group-hover:text-white transition-all duration-300 py-2 px-4">
                            page: 1
                        </span>
                        <button id="review-next-btn" class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded hover:bg-orange-400">
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
