@extends('layouts.app')

@section('content')
    <main class="flex flex-col min-h-screen">

        <!-- Navbar -->
        <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
            <div class="px-4 py-3 flex items-center justify-between lg:px-6">
                <div class="flex items-center">
                    <button id="sidebarToggle" aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray text-primary dark:focus:ring-gray-600">
                        <svg id="sidebarToggleIcon" class="w-6 h-6 transition-transform duration-300" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="#" class="flex items-center space-x-3">
                        <img src="{{ asset('storage/images/logo.png') }}" class="h-10 pl-3" alt="SMKN 17 JAKARTA Logo" />
                        <div class="text-lg font-semibold text-primary">SMKN 17 JAKARTA</div>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-9 h-9 rounded-full" src="{{ asset('storage/images/pp2.jpeg') }}"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow "
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-black" role="none">
                                    K.
                                </p>
                                <p class="text-sm font-medium text-black truncate" role="none">
                                    Kapa@gmail.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-black hover:bg-gray-100" role="menuitem">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 h-screen w-64 md:w-20 pt-16 transform md:translate-x-0 -translate-x-full transition-all duration-500 ease-in-out bg-cover bg-no-repeat md:fixed md:top-0 md:left-0 md:z-40 md:h-screen md:bg-no-repeat"
            style="background-image: url('{{ asset('storage/images/bg-lms1.jpg') }}');">
            <div class="h-full overflow-y-auto transition-all duration-500 ease-in-out">
                <ul class="space-y-4 p-2">
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center p-3 rounded-r-full text-white hover:bg-gray-100 transition-all duration-300 ease-in-out group group-hover:bg-opacity-75 group-hover:backdrop-blur-sm">
                            <i class="bi bi-house-door text-2xl transition-transform duration-300"></i>
                            <span
                                class="ml-6 md:hidden text-white transition-opacity duration-500 ease-in-out opacity-0 group-hover:opacity-25">Beranda</span>
                            <div
                                class="absolute inset-y-0 left-0 w-1 bg-transparent transition-all duration-300 group-hover:bg-blue-500">
                            </div>
                            <!-- White Overlay on Hover -->
                            <div
                                class="absolute inset-0 w-full h-full bg-white opacity-0 group-hover:opacity-25 rounded-r-full transition-opacity duration-300 ease-in-out">
                            </div>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center justify-center p-4 text-gray-900 rounded-full dark:text-white hover:bg-gray-200 transition-all duration-300 ease-in-out group group-hover:bg-opacity-75 group-hover:backdrop-blur-sm">
                            <i class="bi bi-calendar text-2xl transition-transform duration-300 ease-in-out"></i>
                            <span
                                class="ml-6 md:hidden text-white transition-opacity duration-500 ease-in-out opacity-0 group-hover:opacity-100">Tugas</span>
                            <div
                                class="absolute inset-y-0 left-0 w-1 bg-transparent transition-all duration-300 group-hover:bg-blue-500">
                            </div>
                            <!-- White Overlay on Hover -->
                            <div
                                class="absolute inset-0 w-full h-full bg-white opacity-25 group-hover:opacity-20 rounded-r-full transition-opacity duration-300 ease-in-out">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>



        <!-- Overlay for Mobile -->
        <div id="overlay"
            class="fixed inset-0 bg-black opacity-50 hidden z-30 md:hidden transition-opacity duration-300 ease-in-out">
        </div>

        <!-- Content -->
        <div id="content-area" class="flex-1 p-8 transition-all duration-300 ease-in-out pt-20 md:ml-20">
            <div class="grid gap-4 grid-rows-6 md:grid-cols-2 lg:grid-cols-6">
                <div class="h-40 rounded-lg bg-gray-200 shadow-inner flex items-center justify-center">
                </div>
                <div class="h-40 rounded-lg bg-gray-200 shadow-inner flex items-center justify-center">
                </div>
                <div class="h-40 rounded-lg bg-gray-200 shadow-inner flex items-center justify-center">
                </div>
                <div class="h-40 rounded-lg bg-gray-200 shadow-inner flex items-center justify-center">
                </div>
                <div class="h-40 rounded-lg bg-gray-200 shadow-inner flex items-center justify-center">
                </div>
                <div class="h-40 rounded-lg bg-gray-200 shadow-inner flex items-center justify-center">
                </div>
            </div>

            <!-- Lengkungan Biru di Bawah Kanan -->
            <div class="relative">
                <div class="absolute right-0 bottom-0 w-64 h-64 bg-blue-700 rounded-tl-full"></div>
            </div>
        </div>

    </main>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('logo-sidebar');
        const overlay = document.getElementById('overlay');
        const contentArea = document.getElementById('content-area');
        const sidebarToggleIcon = document.getElementById('sidebarToggleIcon');

        sidebarToggle.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            } else {
                sidebar.classList.toggle('md:w-64');
                sidebar.classList.toggle('md:w-20');
                contentArea.classList.toggle('md:ml-64');
                contentArea.classList.toggle('md:ml-20');
                const sidebarTexts = document.querySelectorAll('#logo-sidebar span');
                sidebarTexts.forEach(text => text.classList.toggle('md:hidden'));
                sidebarTexts.forEach(text => text.classList.toggle('opacity-0'));
                sidebarTexts.forEach(text => text.classList.toggle('opacity-100'));
            }
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('-translate-x-0');
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                contentArea.classList.remove('md:ml-64');
                contentArea.classList.add('md:ml-20');
                overlay.classList.add('hidden');
                const sidebarTexts = document.querySelectorAll('#logo-sidebar span');
                sidebarTexts.forEach(text => text.classList.add('opacity-0'));
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('-translate-x-0');
                overlay.classList.add('hidden');
            }
        });
    </script>
@endsection
