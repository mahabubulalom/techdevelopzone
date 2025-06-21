@extends('layouts.admin')

@section('content')



    <div class="grid grid-cols-3 flex gap-4">

        <div class="col-span-">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New SubCategory</h2>

                <form action="{{ route('subcategory') }}" method="POST" class="space-y-4">
                    @csrf

                    @if(session('subsuccess'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('subsuccess') }}
                        </div>
                    @endif

                    <!-- Category Select -->
                    <div>
                        <label for="category_id" class="block text-gray-600 font-medium mb-1">Select Category</label>
                        <select
                            id="category_id"
                            name="category_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                        >
                            <option class="text-gray-600" value="">Select Category</option>
                            @foreach($categories as $category)
                                <option class="text-gray-600" value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('category_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <!-- SubCategory Name -->
                    <div>
                        <label for="subcategory-name" class="block text-gray-600 font-medium mb-1">SubCategory Name</label>
                        <input
                            type="text"
                            id="subcategory-name"
                            name="subcategory_name"
                            placeholder="SubCategory Name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                        />
                    </div>

                    @error('subcategory_name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror

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


        <!-- category table -->

        {{-- <div class="col-span-2 mt-10">
            <h2 class="text-xl font-semibold mb-4">Category Table</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 text-left text-sm">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-2 font-medium text-gray-700">SL</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Category Name</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Category slug</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Date</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        <!-- Row 1 -->
                        @foreach ($categories as $sl=>$category)

                        <tr>
                            <td class="px-4 py-2">{{ $sl+1 }}</td>
                            <td class="px-4 py-2">{{ $category->category_name }}</td>
                            <td class="px-4 py-2">{{ $category->category_slug }}</td>
                            <td class="px-4 py-2">{{ $category->updated_at->diffForHumans() }}</td>
                            <td class="px-4 py-2">
                                <a class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded text-blue-500 hover:bg-orange-400 hover:text-white">Edit</a>
                                <a data-link="{{ route('category.delete', $category->id) }}" class=" delete group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded text-red-500 hover:bg-orange-400 hover:text-white">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                        <!-- Add more rows as needed -->

                    </tbody>
                </table>
            </div>
        </div> --}}
    </div>
@endsection
