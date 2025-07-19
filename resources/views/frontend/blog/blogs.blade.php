@extends('layouts.frontend')

@section('content')

    <main class="container mx-auto px- py-10">

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
        </div>

        <section class="py-8 border-b">
            <div class="max-w-7xl mx-auto px-4">
            <div class="w-full h-48 bg-gray-200 mb-4 flex items-center justify-center">
                <span class="text-gray-600">Ad Space 728×90</span>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="relative">
                <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="Main Feature" class="w-full h-96 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 text-white">
                    <span class="text-xs">FEATURED</span>
                    <h2 class="text-2xl font-bold">Headline of the Day</h2>
                </div>
                </div>
                <div class="space-y-4">
                <div class="flex gap-4">
                    <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-32 h-24 object-cover">
                    <div>
                    <span class="text-xs text-gray-500">Latest</span>
                    <h3 class="text-lg font-semibold">Spotlight Story</h3>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" class="w-32 h-24 object-cover">
                    <div>
                    <span class="text-xs text-gray-500">Insights</span>
                    <h3 class="text-lg font-semibold">Deep Analysis</h3>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Latest News -->
        <section class="py-10 border-b">
            <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-xl font-bold mb-6 border-l-4 border-blue-600 pl-2">Latest News</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Repeat this block for each news item -->
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
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('backend') }}/image/Roborock Z70 Robot Vacuum.jpg" alt="no image found">
                    <h3 class="text-2xl font-semibold mb-2 text-orange-500 hover:underline cursor-pointer">How to Learn Laravel in 2025</h3>
                    <p class="text-gray-700 mb-4 leading-6">Laravel is one of the most popular PHP frameworks. In this post, we explore the best ways to get started and become a pro quickly.</p>
                    <a href="{{ route('blog.show') }}" class="text-orange-500 font-semibold hover:underline">Read More &rarr;</a>
                </article>
            </div>
            </div>
        </section>

        <!-- Content + Sidebar -->
        <section class="py-10">
            <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8">
            <!-- Main Posts -->
            <div class="md:col-span-3 space-y-8">
                <div class="grid md:grid-cols-2 gap-6">
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
                <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-600">Ad Space 300×250</span>
                </div>
                </div>
            </aside>
            </div>
        </section>


    </main>

        <!-- add -->
    <section class="">
        <div class="flex grid grid-cols-1 gap-3">
            <div class="">
                <!-- add -->
                <div class="rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                    ADD
                    <!-- add -->
                </div>
            </div>

        </div>
    </section>
    <!-- add -->

@endsection
