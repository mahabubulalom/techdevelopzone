@extends('layouts.admin')

@section('content')



    <div class="grid grid-cols-3 flex gap-4">

        <div class="col-span-">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New SubCategory</h2>

                <form action="{{ route('subcategory.add') }}" method="POST" class="space-y-4">
                    @csrf

                    @if(session('exists'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                            {{ session('exists') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Category Select -->
                    <div>
                        <label for="category_id" class="block text-gray-600 font-medium mb-1">Select Category</label>
                        <select
                            name="category_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none">
                            <option class="text-gray-600" value="">Select Category</option>
                            @foreach($categories as $category)
                                <option class="text-gray-600" value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


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


        <!-- subcategory table -->

        <div class="col-span-2 mt-10">

            <div class=" overflow-x-auto mb-8">
                @foreach ($categories as $category)
                <h2 class="text-xl font-semibold p-3 bg-white rounded-t-lg" >{{ $category->category_name }} Category</h2>
                    <div class="mb-4 p-3 bg-white">

                        <table class="min-w-full bg-white border border-gray-200 text-left text-sm">
                            <thead class="bg-gray-100 border-b border-gray-200">
                                <tr>
                                    <th class="px-4 py-2 font-medium text-gray-700">SL</th>
                                    <th class="px-4 py-2 font-medium text-gray-700">Category Name</th>
                                    <th class="px-4 py-2 font-medium text-gray-700">SubCategory Name</th>
                                    <th class="px-4 py-2 font-medium text-gray-700">Category slug</th>
                                    <th class="px-4 py-2 font-medium text-gray-700">Date</th>
                                    <th class="px-4 py-2 font-medium text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">

                                <!-- Row 1 -->
                                @foreach (App\Models\Subcategory::where('category_id',$category->id)->get() as $sl=>$subcategory)

                                <tr>
                                    <td class="px-4 py-2">{{ $sl+1 }}</td>
                                    <td class="px-4 py-2">{{ $subcategory->rel_to_category->category_name }}</td>
                                    <td class="px-4 py-2">{{ $subcategory->subcategory_name }}</td>
                                    <td class="px-4 py-2">{{ $subcategory->subcategory_slug }}</td>
                                    <td class="px-4 py-2">{{ $subcategory->created_at->diffForHumans() }}</td>
                                    <td class="px-4 py-2">
                                        <a class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded text-blue-500 hover:bg-orange-400 hover:text-white">Edit</a>
                                        <a data-link="{{ route('subcategory.delete', $subcategory->id) }}" class=" delete group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded text-red-500 hover:bg-orange-400 hover:text-white">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                                <!-- Add more rows as needed -->

                            </tbody>
                        </table>
                    </div>
                @endforeach
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
        icon: "success",
        });
    </script>

    @endif

@endsection
