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
                            <!-- Category Select -->
                            <div>
                                <label for="category_id" class="block text-gray-600 font-medium mb-1">Select Category</label>
                                <select
                                    name=" category_id"
                                    class="category w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none">
                                    <option class="text-gray-600" value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option class="text-gray-600" value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Subcategory -->
                            <!-- SubCategory Select -->
                            <div>
                                <label for="subcategory_id" class="block text-gray-600 font-medium mb-1">Select Category</label>
                                <select
                                    id="sub"
                                    name="subcategory_id"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none">
                                    <option class="text-gray-600" value="">Select SubCategory</option>
                                    @foreach($subcategories as $subcategory)
                                        <option class="text-gray-600" value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                    @endforeach
                                </select>
                                @error('subcategory_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
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


@section('footer_script')

<script>
    $('.category').change(function(){
        var category_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:'/getsubcategory',
            data:{'category_id': category_id},
            success:function(data){
                $('#sub').html(data);
            }
        });
    })
</script>

@endsection
