@extends('layouts.frontend')

@section('content')



    <div class="flex grid grid-cols-3 gap-3">

        <div class="col-span-2 max-w-4xl mx-auto py-10">
            <!-- Blog show -->
            <article class="bg-white rounded-lg shadow-md p-6 mb-6">
                <img src="{{ asset('backend/image/Roborock Z70 Robot Vacuum.jpg') }}" alt="Roborock Z70 Robot Vacuum" class="w-full h-auto rounded-md mb-4">

                <h1 class="text-4xl font-bold text-orange-500 mb-4">How to Learn Laravel in 2025</h1>

                <p class="text-gray-700 text-lg mb-6">
                    Laravel is one of the most popular PHP frameworks. In this post, we explore the best ways to get started and become a pro quickly.
                </p>

                <div class="prose max-w-none">
                    <!-- Blog content here -->
                </div>
            </article>


            <a href="{{ route('blogs') }}" class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600 mb-6">&larr; Back to All Blogs</a>


            <!-- Comments Section -->
            <section class="mt-8">
                <div class="flex grid grid-cols-2 gap-3">
                    <div class="">
                        <!-- Add Comment Form -->
                        <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6">
                            <h2 class="text-2xl font-semibold mb-4 text-orange-400">💬 Comments</h2>
                            <form action="#" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-gray-700">Your Name</label>
                                    <input type="text" name="name" class="w-full border border-gray-300 rounded px-4 py-2" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Your Comment</label>
                                    <textarea name="comment" rows="4" class="w-full border border-gray-300 rounded px-4 py-2" required></textarea>
                                </div>
                                <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600">Post Comment</button>
                            </form>
                        </div>



                        <!-- Existing Comments -->
                        <div class="bg-gray-100 p-6 rounded-lg shadow-inner space-y-4 mb-6">
                            <div class="bg-white p-4 rounded shadow">
                                <p class="font-semibold ">John Doe <span class="text-sm text-gray-500">— June 15, 2025</span></p>
                                <p class="text-gray-700 leading-6">Great tips on learning Laravel! Very helpful.</p>
                            </div>
                            <!-- Add more comment blocks here -->
                        </div>
                    </div>

                    <div class="">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h2 class="text-2xl font-semibold mb-4 text-orange-400">📬 Subscribe for Updates</h2>
                            <p class="text-gray-600 mb-4 leading-6">Stay updated with our latest blog posts. No spam, we promise!</p>
                            <form action="#" method="POST" class="flex flex-col sm:flex-row gap-4">
                                @csrf
                                <input type="email" name="email" placeholder="Enter your email" class="flex-1 px-4 py-2 border border-gray-300 rounded" required>
                                <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600">Subscribe</button>
                            </form>
                        </div>
                        <div class="rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">

                            ADD
                            <!-- add -->

                        </div>
                    </div>

                </div>
            </section>

        </div>


        <div class=" py-10">
            <!-- Blog Post 1 -->
            <div class=" rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                ADD
                <!-- add -->

            </div>
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
    <section class="">
        <div class="flex grid grid-cols-2 gap-3">
            <div class="">
                <!-- add -->
                <div class="rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                    ADD
                    <!-- add -->
                </div>
           </div>
           <div class="">
                <!-- add -->
                <div class="rounded-lg shadow-md p-6 mb-6 hover:shadow-xl transition-shadow duration-300">
                    ADD
                    <!-- add -->
                </div>
            </div>

        </div>
    </section>





@endsection
