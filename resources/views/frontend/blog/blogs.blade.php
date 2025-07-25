@extends('layouts.frontend')

@section('content')

    <main class="container mx-auto px- py-10">
{{--
        <h2 class="text-4xl font-bold mb-8 text-orange-500">Latest Posts</h2>
        <div class="flex-wrap grid grid-cols-4 gap-3">
            <!-- Blog Post 1 -->
            <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                 <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
               <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">How to Learn Laravel in 2025</h3>
                <p class="text-gray-700 mb-4 leading-6">Laravel is one of the most popular PHP frameworks. In this post, we explore the best ways to get started and become a pro quickly.</p>
                <a href="{{ route('blog.show') }}" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
            </article>

            <!-- Blog Post 2 -->
            <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
               <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                 <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
            </article>

            <!-- Blog Post 3 -->
            <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Digital Services You Should Know</h3>
                <p class="text-gray-700 mb-4 leading-6">The digital world is booming with services. Discover which ones you can use to boost your business.</p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
            </article>

            <!-- Blog Post 3 -->
            <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Digital Services You Should Know</h3>
                <p class="text-gray-700 mb-4 leading-6">The digital world is booming with services. Discover which ones you can use to boost your business.</p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
            </article>

            <!-- Blog Post 3 -->
            <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Digital Services You Should Know</h3>
                <p class="text-gray-700 mb-4 leading-6">The digital world is booming with services. Discover which ones you can use to boost your business.</p>
                <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
            </article>
        </div> --}}


        <!-- add space -->

        <section class=" border-b  rounded-xl">
            <div class="max-w-7xl mx-auto px-4">
                <div class="w-full h-48 bg-gray-400 mb-4 flex items-center justify-center">
                    <span class="text-gray-600">Ad Space 728×90</span>
                </div>
            </div>
        </section>

        <!-- top post -->

        <section class="py-8 border-b mb-4 bg-white rounded-xl">
            <div class="max-w-7xl mx-auto px-4">

                <div class="grid md:grid-cols-2 gap-8">
                    <a href="{{ url('/blog/show') }}" class="relative">
                        <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="Main Feature" class="w-full h-96 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white">
                            <span class="text-xs">FEATURED</span>
                            <h2 class="text-2xl font-bold">Headline of the Day</h2>
                        </div>
                    </a>
                    <div class="space-y-4">
                        <a href="{{ url('/blog/show') }}" class="flex gap-4">
                            <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-32 h-24 object-cover">
                            <div>
                            <span class="text-xs text-gray-500">Latest</span>
                            <h3 class="text-lg font-semibold">Spotlight Story</h3>
                            </div>
                        </a>
                        <a href="{{ url('/blog/show') }}" class="flex gap-4">
                            <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-32 h-24 object-cover">
                            <div>
                            <span class="text-xs text-gray-500">Insights</span>
                            <h3 class="text-lg font-semibold">Deep Analysis</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News -->
        <section class="bg-white rounded-xl py-10 border-b">
            <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-xl font-bold mb-6 border-l-4 border-blue-600 pl-2">Latest News</h2>
              <!-- Article Grid -->
            <div id="article-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Article Cards (same as your code) -->
                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>

                <!-- Blog Post 2 -->
                <article class="article bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">Top 10 Tailwind CSS Tricks</h3>
                    <p class="text-gray-700 mb-4 leading-6">Tailwind CSS makes styling super easy. Here are the top 10 tricks to speed up your development workflow.</p>
                    <a href="#" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>


            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <div class="flex items-center space-x-4">
                <button id="prevBtn" class="text-gray-600 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 disabled:opacity-50">← Previous</button>
                <div class="flex space-x-2" id="pageButtons"></div>
                <button id="nextBtn" class="text-gray-600 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 disabled:opacity-50">Next →</button>
                </div>
            </div>
            </div>
        </section>

        <!-- Content + Sidebar -->
        <section class="py-10">
            <div class="max-w-7xl mx-auto px- grid md:grid-cols-4 gap-8">
            <!-- Main Posts -->
            <div class=" md:col-span-3 space-y-8">
                <div class="bg-white rounded-xl px-4 grid md:grid-cols-2 gap-6">
                    <!-- Blog Post 1 -->
                    <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                        <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">How to Learn Laravel in 2025</h3>
                        <p class="text-gray-700 mb-4 leading-6">Laravel is one of the most popular PHP frameworks. In this post, we explore the best ways to get started and become a pro quickly.</p>
                        <a href="{{ route('blog.show') }}" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                    </article>
                    <!-- Blog Post 1 -->
                    <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                        <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">How to Learn Laravel in 2025</h3>
                        <p class="text-gray-700 mb-4 leading-6">Laravel is one of the most popular PHP frameworks. In this post, we explore the best ways to get started and become a pro quickly.</p>
                        <a href="{{ route('blog.show') }}" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                    </article>
                </div>
                <div>
                    <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                        <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">How to Learn Laravel in 2025</h3>
                        <p class="text-gray-700 mb-4 leading-6">Laravel is one of the most popular PHP frameworks. In this post, we explore the best ways to get started and become a pro quickly.</p>
                        <a href="{{ route('blog.show') }}" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                    </article>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="space-y-8">
                <div>
                <h4 class="font-bold text-lg mb-2">About Us</h4>
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-full h-48 object-cover mb-2">
                <p class="text-sm">We bring you the latest and most trusted news from around the world.</p>
                </div>
                <div>
                <h4 class="font-bold text-lg mb-2">Popular News</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex gap-3">
                    <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-16 h-16 object-cover">
                    <p>Viral Story Headline</p>
                    </li>
                    <li class="flex gap-3">
                    <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-16 h-16 object-cover">
                    <p>Exclusive Interview</p>
                    </li>
                </ul>
                </div>
                <div>
                <h4 class="font-bold text-lg mb-2">Advertisement</h4>
                <div class="w-full h-64 bg-gray-400 flex items-center justify-center">
                    <span class="text-gray-600">Ad Space 300×250</span>
                </div>
                </div>
            </aside>
            </div>
        </section>


    </main>


    <!-- add space -->

        <section class=" border-b  rounded-xl">
            <div class="max-w-7xl mx-auto px-4">
                <div class="w-full h-48 bg-gray-400 mb-4 flex items-center justify-center">
                    <span class="text-gray-600">Ad Space 728×90</span>
                </div>
            </div>
        </section>
    <!-- add -->



    <!-- latest news paginations -->

    <script>
    const perPage = 6;
    let currentPage = 1;

    const articles = document.querySelectorAll(".article");
    const totalPages = Math.ceil(articles.length / perPage);

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageButtonsContainer = document.getElementById("pageButtons");

    function showPage(page) {
        articles.forEach((article, index) => {
        article.style.display = (index >= (page - 1) * perPage && index < page * perPage) ? "block" : "none";
        });

        // Disable buttons
        prevBtn.disabled = page === 1;
        nextBtn.disabled = page === totalPages;

        // Highlight active page
        const buttons = document.querySelectorAll("#pageButtons button");
        buttons.forEach((btn, i) => {
        btn.className = i + 1 === page
            ? "bg-red-500 text-white px-3 py-1 rounded"
            : "bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-gray-300";
        });
    }

    function createPageButtons() {
        for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.className = "bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-gray-300";
        btn.addEventListener("click", () => {
            currentPage = i;
            showPage(currentPage);
        });
        pageButtonsContainer.appendChild(btn);
        }
    }

    // Button event listeners
    prevBtn.addEventListener("click", () => {
        if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentPage < totalPages) {
        currentPage++;
        showPage(currentPage);
        }
    });

    // Initialize
    createPageButtons();
    showPage(currentPage);
    </script>


@endsection
