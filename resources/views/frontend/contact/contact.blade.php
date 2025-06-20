@extends('layouts.frontend')

@section('content')


  <div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Header -->
    <h1 class="text-4xl font-bold mb-8 text-center text-orange-400">Contact Us</h1>

    <!-- Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

      <!-- Contact Form -->
      <form class="bg-white shadow-md rounded-lg p-8 space-y-6">
        <div>
          <label class="  text-sm font-medium mb-1 text-orange-400">Name</label>
          <input type="text" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring focus:border-blue-400" placeholder="Your name" />
        </div>

        <div>
          <label class="  text-sm font-medium mb-1 text-orange-400">Email</label>
          <input type="email" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring focus:border-blue-400" placeholder="Your email" />
        </div>

        <div>
          <label class="  text-sm font-medium mb-1 text-orange-400">Message</label>
          <textarea class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring focus:border-blue-400" rows="5" placeholder="Your message"></textarea>
        </div>

        <button type="submit" class="bg-orange-400 text-white px-6 py-3 rounded-lg hover:bg-orange-500 transition">Send Message</button>
      </form>

      <!-- Contact Information -->
      <div class="bg-white shadow-md rounded-lg p-8 space-y-6">
        <div>
          <h2 class="text-xl font-semibold mb-2 leading-6 text-orange-400">Our Office</h2>
          <p>1234 Street Name, City, Country 12345</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2 text-orange-400">Email</h2>
            <a href="mailto:contact@example.com" class="text-blue-400 hover:underline">
                contact@example.com
            </a>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2 text-orange-400">Phone</h2>
            <a href="tel:+8801234567890" class="text-blue-400 hover:underline">
                +880 123 456 7890
            </a>
        </div>

        <div>
          <h2 class="text-xl font-semibold mb-2 text-orange-400">Find Us</h2>
          <!-- Google Maps Embed Placeholder -->
          <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
            Google Map Placeholder
          </div>
        </div>
      </div>
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


@endsection
