@extends('layouts.admin')

@section('content')

            <div class="grid grid-cols-3 flex gap-4">
                <div class="col-span">
                    <div class="max-w-md mx-auto mt-10">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 space-y-4">
                            <!-- Title -->
                            <div>
                            <label class="block text-gray-600 font-medium mb-1" for="title">Title</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                    id="title" type="text" placeholder="Enter product title" required>
                            </div>

                            <!-- Category -->
                            <div>
                            <label class="block text-gray-600 font-medium mb-1" for="category">Category</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                    id="category" type="text" placeholder="Enter category" required>
                            </div>

                            <!-- Subcategory -->
                            <div>
                            <label class="block text-gray-600 font-medium mb-1" for="subcategory">Subcategory</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                    id="subcategory" type="text" placeholder="Enter subcategory">
                            </div>

                            <!-- Image Upload -->
                            <div>
                            <label class="block text-gray-600 font-medium mb-1" for="image">Product Image</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                    id="image" type="file" accept="image/*">
                            </div>

                            <!-- Affiliate Link -->
                            <div>
                            <label class="block text-gray-600 font-medium mb-1" for="affiliate">Affiliate Link</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                    id="affiliate" type="url" placeholder="Enter affiliate URL">
                            </div>

                            <!-- Date -->
                            <div>
                            <label class="block text-gray-600 font-medium mb-1" for="date">Date</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                    id="date" type="date" required>
                            </div>

                            <!-- Submit Button -->
                        <div>
                            <button
                            type="submit"
                            class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                            >
                            Add Products
                            </button>
                        </div>
                        </form>
                    </div>

                </div>
                <div class="col-span-">
                    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New SubCategory</h2>

                        <form action="#" method="POST" class="space-y-4">
                        <!-- Category Name -->
                        <div>
                            <label for="category-name" class="block text-gray-600 font-medium mb-1">Silect Category</label>
                            <input
                            type="text"
                            id="category-name"
                            name="category_name"
                            placeholder="Silect Category"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                            required
                            />
                        </div>
                        <!-- SubCategory Name -->
                        <div>
                            <label for="category-name" class="block text-gray-600 font-medium mb-1">SubCategory Name</label>
                            <input
                            type="text"
                            id="subcategory-name"
                            name="subcategory_name"
                            placeholder="SubCategory Name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                            required
                            />
                        </div>

                        <!-- SubCategory Slug -->
                        <div>
                            <label for="slug" class="block text-gray-600 font-medium mb-1">SubCategory Slug</label>
                            <input
                            type="text"
                            id="subcategory_slug"
                            name="subcategory_slug"
                            placeholder="SubCategory Slug"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                            required
                            />
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                            type="submit"
                            class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                            >
                            Add SubCategory
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-span-">
                    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New Category</h2>

                        <form action="#" method="POST" class="space-y-4">
                        <!-- Category Name -->
                        <div>
                            <label for="category-name" class="block text-gray-600 font-medium mb-1">Category Name</label>
                            <input
                            type="text"
                            id="category-name"
                            name="category_name"
                            placeholder="Category Name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                            required
                            />
                        </div>

                        <!-- Category Slug -->
                        <div>
                            <label for="slug" class="block text-gray-600 font-medium mb-1">Category Slug</label>
                            <input
                            type="text"
                            id="category_slug"
                            name="category_slug"
                            placeholder="Category Slug"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                            required
                            />
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                            type="submit"
                            class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                            >
                            Add Category
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Table inside main content container -->

            <div class="container mx-auto">
                <h2 class="text-xl font-semibold mb-4">Products Table</h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 text-left text-sm">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                        <th class="px-4 py-2 font-medium text-gray-700">Image</th>
                        <th class="px-4 py-2 font-medium text-gray-700">Title</th>
                        <th class="px-4 py-2 font-medium text-gray-700">Category</th>
                        <th class="px-4 py-2 font-medium text-gray-700">Subcategory</th>
                        <th class="px-4 py-2 font-medium text-gray-700">Link</th>
                        <th class="px-4 py-2 font-medium text-gray-700">Date</th>
                        <th class="px-4 py-2 font-medium text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        <!-- Row 1 -->
                        <tr>
                        <td class="px-4 py-2">
                            <img src="https://via.placeholder.com/40" alt="Thumbnail" class="w-10 h-10 rounded object-cover" />
                        </td>
                        <td class="px-4 py-2">Sample Title</td>
                        <td class="px-4 py-2">Sample Category</td>
                        <td class="px-4 py-2">Sample Subcategory</td>
                        <td class="px-4 py-2 text-blue-600 hover:underline">
                            <a href="#">example.com</a>
                        </td>
                        <td class="px-4 py-2">2025-06-13</td>
                        <td class="px-4 py-2">
                            <button class="text-blue-600 hover:underline mr-2">Edit</button>
                            <button class="text-red-600 hover:underline">Delete</button>
                        </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                        <td class="px-4 py-2">
                            <img src="https://via.placeholder.com/40" alt="Thumbnail" class="w-10 h-10 rounded object-cover" />
                        </td>
                        <td class="px-4 py-2">Another Title</td>
                        <td class="px-4 py-2">Another Category</td>
                        <td class="px-4 py-2">Another Subcategory</td>
                        <td class="px-4 py-2 text-blue-600 hover:underline">
                            <a href="#">example.org</a>
                        </td>
                        <td class="px-4 py-2">2025-06-12</td>
                        <td class="px-4 py-2">
                            <button class="text-blue-600 hover:underline mr-2">Edit</button>
                            <button class="text-red-600 hover:underline">Delete</button>
                        </td>
                        </tr>

                        <!-- Add more rows as needed -->

                    </tbody>
                    </table>
                </div>
            </div>

@endsection
