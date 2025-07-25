@extends('layouts.admin')
@section('content')

    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-4">
        <h2 class="text-2xl font-semibold mb-4">Add New Blog</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
                    required>
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- tags --}}
            <label class="block text-gray-700 font-bold mb-2">Tags</label>
            <select name="tags[]" multiple class="form-select">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>



            <label for="tags">Select Tags:</label>
            <select name="tags[]" id="tags"  multiple class="form-select">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>

                @error('tags')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror

            <!-- Content -->
        <!-- Editor Label -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Content</label>

            <!-- Editor Container -->
            {{-- <div id="editorjs" class="border rounded px-4 py-2 bg-white min-h-[200px]"></div> --}}

            <!-- Hidden input to store Editor.js data -->
            {{-- <input type="hidden" name="content" id="contentInput"> --}}
            <textarea name="content" id="" cols="30" rows="10" class="border rounded px-4 py-2 bg-white w-full"></textarea>
            <!-- Error Message -->
            @error('content')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>



            <!-- Image Upload -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Thumbnail Image</label>
                <input type="file" name="image"
                    class="w-full text-gray-700 border rounded px-4 py-2 focus:outline-none focus:ring">
                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Publish Blog
                </button>
            </div>
        </form>
    </div>



<!-- Table inside main content container -->
<div class="container mx-auto mb-8">
    <h2 class="text-xl font-semibold mb-4">Blog Table</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 text-left text-sm">
            <thead class="bg-gray-100 border-b border-gray-200">
                <tr>
                    <th class="px-4 py-2 font-medium text-gray-700">Image</th>
                    <th class="px-4 py-2 font-medium text-gray-700">Title</th>
                    <th class="px-4 py-2 font-medium text-gray-700">Content</th>
                    <th class="px-4 py-2 font-medium text-gray-700">Tags</th> <!-- New Column -->
                    <th class="px-4 py-2 font-medium text-gray-700">Date</th>
                    <th class="px-4 py-2 font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($blog as $sl => $blog)
                <tr>
                    <td class="px-4 py-2 w-28">
                        <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="Thumbnail" class="h-24 rounded object-cover" />
                    </td>
                    <td class="px-4 py-2">{{ $blog->title }}</td>
                    <td class="px-4 py-2">{{ Str::limit(strip_tags($blog->content), 200) }}</td>

                    <!-- Show Tags -->
                    <td class="px-4 py-2">
                        @foreach(explode(',', $blog->tags) as $tag)
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold mr-1 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                            {{ $tag }}
                        </span>
                    @endforeach
                    </td>

                    <td class="px-4 py-2">
                        {{ $blog->updated_at == NULL ? $blog->created_at->diffForHumans() : $blog->updated_at->diffForHumans() }}
                    </td>
                    <td class="px-4 py-2">
                        <button class="text-blue-600 hover:underline mr-2">Edit</button>
                        <button class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!-- JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script>
  const editor = new EditorJS({
    holder: 'editorjs',
  });
</script> --}}
{{--
<script>
    const editor = new EditorJS({
        holder: 'editorjs',
        placeholder: 'Write your content here...',
        tools: {
            // Optional: Add tools here (e.g. Header, List, etc.)
        }
    });

    // Submit button target
    const form = document.querySelector('form'); // Ensure you use correct form selector

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default first

        editor.save().then((outputData) => {
            document.getElementById('contentInput').value = JSON.stringify(outputData); // Save JSON in hidden field
            form.submit(); // Now submit with data
        }).catch((error) => {
            console.error('Saving failed: ', error);
            alert('Content is required!');
        });
    });
</script> --}}


@endsection

@section('footer_script')

<script>
    $(document).ready(function() {
        $('#tags').select2({
            tags: true, // allow custom tag creation
            tokenSeparators: [',']
        });
    });
</script>


@endsection
