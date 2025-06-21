@extends('layouts.admin')

@section('content')



    <div class="grid grid-cols-3 flex gap-4">

        <div class="col-span-">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New Category</h2>

                <form action="{{ route('category.add') }}" method="POST" class="space-y-4">
                @csrf

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Category Name -->
                <div>
                    <label for="text" class="block text-gray-600 font-medium mb-1">Category Name</label>
                    <input
                    type="text"
                    id="category-name"
                    name="category_name"
                    placeholder="Category Name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"

                    />
                </div>

                    @error('category_name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror

                <!-- Category Slug -->
                {{-- <div>
                    <label for="text" class="block text-gray-600 font-medium mb-1">Category Slug</label>
                    <input
                    type="text"
                    id="category_slug"
                    name="category_slug"
                    placeholder="Category Slug"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"

                    />
                </div> --}}

                <!-- Category description -->
                {{-- <div>
                    <label for="text" class="block text-gray-600 font-medium mb-1">Category Slug</label>
                    <textarea name="category_description" cols="30" rows="5"
                    type="text"
                    id="category_description"
                    placeholder="Category description"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                    >
                    </textarea>
                </div> --}}

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


        <!-- category table -->

        <div class="col-span-2 mt-10">
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
        </div>
    </div>
@endsection

@section('footer_script')


    <script>
        $(document).ready(function() {
            $('.delete').click(function() {
                var link = $(this).attr('data-link');
                // alert(link)
                Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                }
                });
            });
        });
    </script>

    @if (session('deleted'))
    <script>
        Swal.fire({
        title: "Deleted!",
        text: '{{ session('deleted') }}',
        icon: "success"
        });
    </script>

    @endif

@endsection
