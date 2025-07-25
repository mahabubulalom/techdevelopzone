@extends('layouts.admin')

@section('content')

    <div class="grid grid-cols-3 flex gap-4">

        <div class="col-span-">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New Tag</h2>

                <form action="{{ route('tag.stor') }}" method="POST" class="space-y-4">
                    @csrf

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Category Name -->
                    <div>
                        <label for="text" class="block text-gray-600 font-medium mb-1">Tag name</label>
                        <input
                        type="text"
                        id="tag-name"
                        name="tag_name"
                        placeholder="Tag Name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"

                        />
                    </div>

                        @error('tag_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                    <div>
                        <button
                        type="submit"
                        class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                        >
                        Add Tag
                        </button>
                    </div>
                </form>
            </div>


        </div>
        <!-- BlogTag Add Form -->
        <div class="col-span-">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Add New BlogTag</h2>

                @if(session('blogtag success'))
                    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                        {{ session('blogtag success') }}
                    </div>
                @endif

                <form action="{{ route('blogtags.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-600 font-medium mb-1" for="name">Tag Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none" placeholder="Enter tag name">
                    </div>

                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition">
                        Add BlogTag
                    </button>
                </form>
            </div>
        </div>



        <!-- category table -->

        <div class="col-span-2 mt-10">
            <h2 class="text-xl font-semibold mb-4">Tag Table</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 text-left text-sm">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-2 font-medium text-gray-700">SL</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Tag Name</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Tag slug</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Date</th>
                            <th class="px-4 py-2 font-medium text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        <!-- Row 1 -->
                        @foreach ($tags as $sl=>$tag)

                        <tr>
                            <td class="px-4 py-2">{{ $sl+1 }}</td>
                            <td class="px-4 py-2">{{ $tag->tag_name }}</td>
                            <td class="px-4 py-2">{{ $tag->tag_slug }}</td>
                            <td class="px-4 py-2">{{ $tag->updated_at==NULL?$tag->created_at->diffForHumans():$tag->updated_at->diffForHumans() }}</td>
                            {{-- <td class="px-4 py-2">{{ $tag->created_at->diffForHumans() }}</td> --}}
                            <td class="px-4 py-2">
                                <a class=" group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded text-blue-500 hover:bg-orange-400 hover:text-white">Edit</a>
                                <a data-link="{{ route('tag.delete', $tag->id) }}" class=" delete group py-2 shadow-lg border-b-orange-400 border-b-2 px-2 cursor-pointer transition-all duration-300 rounded text-red-500 hover:bg-orange-400 hover:text-white">Delete</a>
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
