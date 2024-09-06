@extends('components.layouts.auth')
<div class="min-h-screen py-5 bg-putih">
    <div class="container mx-auto bg-putih">
        <div class="flex flex-col lg:flex-row w-4/5 rounded-xl mx-auto overflow-hidden shadow-xl pb-8">
            <div class="w-full lg:w-1/2 my-5 lg:my-12">
                <img src="{{ asset('img/character/mimin/mimin-happy-1.webp') }}"
                    class="mx-auto object-cover w-[60%] lg:w-[100%]" alt="Mimin RTI">
            </div>

            <div class="w-full lg:w-1/2 py-5 lg:py-16 px-20 mr-28">
                <h1 class="text-3xl text-center font-semibold my-10">Sign Up</h1>
                <form action="{{ route('register') }}" class="input-register" method="POST">
                    @csrf
                    <div class="mt-3">
                        <span class="font-semibold">Name</span>
                        <input type="text" name="name" placeholder="Input your name"
                            class="mb-3 mt-3 rounded-lg py-3 px-2 w-full" required>
                        @error('name')
                            <span class="text-danger-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mt-3">
                        <span class="font-semibold">Email</span>
                        <input type="email" name="email" placeholder="Input your email"
                            class="mb-3 mt-3 rounded-lg py-3 px-2 w-full" required>
                        @error('email')
                            <span class="text-danger-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <span class="font-semibold">Password</span>
                        <div class="password-wrapper relative flex items-center">
                            <input type="Password" name="password" placeholder="Input your password"
                                class="mb-3 mt-3 rounded-lg py-3 px-2 w-full block" id="password" required>
                            <i class="fa-regular fa-eye-slash flex items-center cursor-pointer absolute right-4 top-[38%]"
                                id="togglepassword"></i>
                        </div>
                        @error('password')
                            <span class="text-danger-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <span class="font-semibold">Confirm Password</span>
                        <div class="password-wrapper relative flex items-center">
                            <input type="Password" name="password_confirmation" placeholder="Input your password"
                                class="mb-3 mt-3 rounded-lg py-3 px-2 w-full block" id="password" required>
                            <i class="fa-regular
                                fa-eye-slash flex items-center cursor-pointer absolute right-4 top-[38%]"
                                id="togglepassword"></i>
                        </div>
                        @error('password_confirmation')
                            <span class="text-danger-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <p class="font-semibold mb-8 lg:mb-3">Already have an account? <a href="../login/login.html"
                            class="text-merah font-bold">Log In</a></p>
                    <button type="submit"
                        class="custom-button-login text-base font-semibold text-merah py-2 px-8 border-2 border-merah rounded-full"
                        value="Sign Up">Sign Up</button>
                </form>
            </div>

        </div>
    </div>
</div>
