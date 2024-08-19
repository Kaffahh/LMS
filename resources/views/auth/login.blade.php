@extends('layouts.app')


@section('content')
    <main class="min-h-screen" class="bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('storage/images/bg-lms2.jpg') }})">
        <nav class="fixed flex flex-1 py-4 px-6">
            <div class="flex gap-4">
                <img class="size-14" src="{{ asset('storage/images/logo.png') }}" alt="Logo">
                <div>
                    <h1 class="text-lg font-semibold text-white">SMK Negeri 17</h1>
                    <h1 class="text-lg font-semibold text-white">Jakarta Barat</h1>
                </div>
            </div>
        </nav>
        <div class="hidden md:inline md:absolute top-2/3 -translate-x-1/2 -translate-y-1/2 left-40 z-20">
            <img src="{{ asset('storage/images/robot.png') }}" alt="Robot" class="object-cover h-[350px]">
        </div>
        <div class="flex h-screen justify-center items-center">
            <div class="inline md:absolute inset-y-0 w-full md:max-w-lg xl:max-w-xl top-[30%] px-8 py-10 rounded-xl bg-[#EAEAEF]">
                <div class="flex flex-col justify-center">
                    <h2 class="text-center text-3xl font-bold text-primary mb-8">Login bang👌</h2>
                    <form action="{{ route('login.store') }}" method="POST" class="px-2 md:px-0">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="block text-primary font-medium text-lg">Email</label>
                            <input type="text" id="email" name="email" class="w-full p-2 border rounded-md shadow-sm focus:outline-none focus:ring-1 ring-1 ring-primary" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="block text-primary font-medium text-lg">Password</label>
                            <input type="password" id="password" name="password" class="w-full p-2 border rounded-md shadow-sm focus:outline focus:ring-1 ring-1 ring-primary" required>
                        </div>
                        <div class="flex mb-6 justify-end">
                            <a href="{{ route('password.index') }}" class="text-primary font-medium">Lupa Password bang ?</a>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white p-3 rounded-md uppercase hover:bg-primary/95">Login</button>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="custom-footer z-10 sm:custom-footer-sm"></div>
    </main>
@endsection

@section('styles')
    <style>
        .custom-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 250px;
            background: #fff;
            clip-path: polygon(50% 60%, 100% 0, 100% 100%, 0 100%, 0 0);
        }
        .custom-footer-sm {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: #fff;
            clip-path: polygon(50% 60%, 100% 0, 100% 100%, 0 100%, 0 0);
        }
    </style>
@endsection