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
