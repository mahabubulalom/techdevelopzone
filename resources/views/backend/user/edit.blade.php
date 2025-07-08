@extends('layouts.admin')

@section('content')


            <div class="grid grid-cols-3 flex gap-4">

                <div class="col-span-">
                    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Edit profile</h2>
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        <form action="{{ route('user.update') }}" method="POST" class="space-y-4">
                            @csrf
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-gray-600 font-medium mb-1">Name</label>
                            <input type="text" id="name"  name="name"  value="{{ Auth::user()->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"   />
                            @error('name')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- email -->
                        <div>
                            <label for="email" class="block text-gray-600 font-medium mb-1">email</label>
                            <input  type="email"  id="email"  name="email"  value="{{ Auth::user()->email }}"  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none" />
                            @error('email')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                            type="submit"
                            class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                            >
                            Update
                            </button>
                        </div>
                        </form>
                    </div>
                </div>


                <div class="col-span-">
                    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Chang password</h2>
                        @if(session('pass_success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                                {{ session('pass_success') }}
                            </div>
                        @endif

                        <form action="{{ route('update.password') }}" method="POST"  class="space-y-4">
                            @csrf
                        <!-- current password -->
                        <div>
                            <label for="name" class="block text-gray-600 font-medium mb-1">Current Password</label>
                            <input type="password"   name="current_password"  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"/>
                            @error('current_password')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            @if (@session('curnt'))
                                <p class="text-red-600 text-sm mt-1">{{ session('curnt') }}</p>
                            @endif('curnt')
                        </div>

                        <!-- new password -->
                        <div>
                            <label for="name" class="block text-gray-600 font-medium mb-1">New Password</label>
                            <input  type="password"   name="password"  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none" />
                            @error('password')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- new password -->
                        <div>
                            <label for="name" class="block text-gray-600 font-medium mb-1">Confirm Password</label>
                            <input  type="password"  name="password_confirmation"  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none" />
                            @error('password_confirmation')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                            type="submit"
                            class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                            >
                            Update
                            </button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="col-span-">
                    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Chang photo</h2>
                        @if(session('photo_success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                                {{ session('photo_success') }}
                            </div>
                        @endif

                        <form action="{{ route('user.photo.update') }}" method="POST"  class="space-y-4" enctype="multipart/form-data">
                            @csrf
                        <!-- current password -->
                        <div>
                            <label for="photo" class="block text-gray-600 font-medium mb-1">select Photo</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none"
                                name="profil_photo" id="" type="file" onchange="document.getElementById('blah').src =window.URL.createObjectURL(this.files[0])">

                            <div class="w-32 mt-4">
                                <img src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}" id="blah" alt="">
                            </div>

                            @error('profil_photo')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            @if (@session('curnt'))
                                <p class="text-red-600 text-sm mt-1">{{ session('curnt') }}</p>
                            @endif('curnt')
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                            type="submit"
                            class="w-full bg-orange-400 text-white py-2 rounded-md font-semibold hover:bg-orange-500 transition"
                            >
                            Update
                            </button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>


@endsection
