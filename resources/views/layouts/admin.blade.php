<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- tag Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


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
                    <a href="{{ route('admin.panel') }}" class="  active "><i class="fa fa-home pr-2"></i><span class=" ">home</span></a>
                </li>
                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="#"class=" "><i class="fa fa-user pr-2"></i><span class=" ">about</span></a>
                </li>
                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="{{ route('category') }}"class=" "><i class="fa fa-list pr-2"></i><span class=" ">Add catagory</span></a>
                </li>
                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="{{ route('subcategory') }}"class=" "><i class="fa fa-list pr-2"></i><span class=" ">Add subcatagory</span></a>
                </li>
                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="{{ route('add.products') }}"class=" "><i class="fa fa-list pr-2"></i><span class=" ">Add Products</span></a>
                </li>
                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="{{ route('tag') }}"class=" "><i class="fa fa-list pr-2"></i><span class=" ">Products Tag</span></a>
                </li>

                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="#"class=" "><i class="fa fa-briefcase pr-2"></i><span class=" ">Edit Color</span></a>
                </li>
                <li class="nav__items mb-4 flex border-b border-orange-400 capitalize hover:text-orange-400 transition hover:scale-125">
                    <a href="{{ route('add.blogs') }}"class=" "><i class="fa fa-blog pr-2"></i><span class=" ">add blog</span></a>
                </li>

            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-40 py-6 px-4 bg-sky-200" >


            <!-- Navbar -->
            <nav class="bg-white shadow p-4 flex justify-end items-center relative">
                <div class="flex items-center gap-4">

                <!-- Notification -->
                <button class="text-xl">🔔</button>

                <!-- Message -->
                <button class="text-xl">💬</button>

                <!-- Profile Picture -->
                <div class="relative">
                    <img
                    src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}"
                    alt="Profile"
                    class="w-10 h-10 rounded-full cursor-pointer"
                    id="profileButton"
                    />

                    <!-- Dropdown -->
                    <div
                    id="dropdownMenu"
                    class="hidden absolute right-0 mt-2 w-64 bg-white rounded-md shadow-lg z-50 p-4"
                    >
                    <div class="text-center border-b pb-4">
                        <img src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}" alt="Profile" class="w-16 h-16 rounded-full mx-auto mb-2"/>
                        <h4 class="font-semibold text-lg">{{ Auth::user()->name }}</h4>
                        <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="pt-4 space-y-2">
                        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100">👤 Profile</a>
                        <a href="{{ route('user.edit') }}" class="block px-3 py-2 rounded hover:bg-gray-100">✏️ Edit Profile</a>
                        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100">🔄 Switch User</a>
                        <a href="{{ route('user.logout') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-red-500">🚪 Log Out</a>
                    </div>
                    </div>
                </div>
                </div>
            </nav>

            <!-- Script -->
            <script>
                const profileBtn = document.getElementById('profileButton');
                const dropdown = document.getElementById('dropdownMenu');

                profileBtn.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
                });
            </script>



            @yield('content')




        </main>

    <!-- </div> -->






    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/8abab984f3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @yield('footer_script')

</body>
</html>
