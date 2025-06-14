<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        ul,li{
            list-style-type:none;
        }
        h1,h2,h3,h4,h5,h6,p{
            line-height: 0.8;
        }
        .nav__items.active . {
            color: var(--skin-color);
            transform: scale(1.25);
        }
        .nav__items.active{
            border-color: var(--skin-color);
        }

    </style>
</head>
<body class=" bg-sky-200 ">
    <!-- <section>
        <div class="mx-auto max-w-7xl py-4 ">
            <div class="w-md h-full bg-white">

            </div>
        </div>
    </section> -->



    <!-- <div class="min-h-screen flex flex-col md:flex-row bg-sky-200"> -->

        <!-- Sidebar -->
        <aside class="fixed bg-white text-gray-800 w-full md:w-40 h-auto md:h-screen p-4 border-b md:border-b-0 md:border-r border-gray-300">
        <div class="logo capitalize tpo-50 text-2xl transition hover:scale-125">
                        <a href="#home" class="logo__link font-bold text-xl text-orange-400">Tech Develop Zone</a>
                    </div>

                    <ul class="nav mt-12 text-center">
                        <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                            <a href="#" class="  active "><i class="fa fa-home pr-2"></i><span class=" ">home</span></a>
                        </li>
                        <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                            <a href="#"class=" "><i class="fa fa-user pr-2"></i><span class=" ">about</span></a>
                        </li>
                        <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                            <a href="#"class=" "><i class="fa fa-list pr-2"></i><span class=" ">Add catagory</span></a>
                        </li>
                        <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                            <a href="#"class=" "><i class="fa fa-list pr-2"></i><span class=" ">Add Products</span></a>
                        </li>

                        <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                            <a href="#"class=" "><i class="fa fa-briefcase pr-2"></i><span class=" ">Edit Color</span></a>
                        </li>
                        <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                            <a href="#"class=" "><i class="fa fa-blog pr-2"></i><span class=" ">add blog</span></a>
                        </li>

                    </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-40 py-6 px-4 bg-sky-200" >
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

        </main>

    <!-- </div> -->


  <!-- -------------------------------------- -->












    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/8abab984f3.js" crossorigin="anonymous"></script>

</body>
</html>
