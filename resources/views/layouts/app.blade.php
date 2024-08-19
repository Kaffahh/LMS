<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Learn Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('styles')
</head>

<body>
    @if ($errors->any())
        <div class="absolute right-0 top-0 z-50 flex flex-col items-end p-2">
            @foreach ($errors->all() as $key => $error)
                <div class="p-2 select-none" x-data="{ showerror{{ $key }}: true }" x-init="setTimeout(() => showerror{{ $key }} = false, 10000)" x-show="showerror{{ $key }}" x-transition:leave="transition ease-in duration-500 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="error-notification-{{ $key }}">
                    <div class="flex items-center w-full max-w-xs p-2 lg:p-4 text-gray-700 bg-red-300 rounded-lg shadow" role="alert">
                        <div class="mx-3 text:sm lg:text-base font-normal">{{ $error }}</div>
                        <button @click="showerror{{ $key }} = false" type="button" class="ms-auto -mx-1.5 -my-1.5 h-full hover:text-gray-700 rounded-lg p-1.5 inline-flex items-center justify-center w-8" data-dismiss-target="#toast-default" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <div class="fixed md:absolute right-0 top-0 z-50 flex flex-col items-end p-2">
            <div class="p-2 select-none" x-data="{ showsuccess: true }" x-init="setTimeout(() => showsuccess = false, 10000)" x-show="showsuccess" x-transition:leave="transition ease-in duration-500 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="success-notification-">
                <div class="flex items-center w-full max-w-xs p-2 lg:p-4 text-gray-700 bg-green-300 rounded-lg shadow" role="alert">
                    <div class="mx-3 text:sm lg:text-base font-normal">{{ session('success') }}</div>
                    <button @click="showsuccess = false" type="button" class="ms-auto -mx-1.5 -my-1.5 h-full hover:text-gray-700 rounded-lg p-1.5 inline-flex items-center justify-center w-8" data-dismiss-target="#toast-default" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

    @yield('content')
</body>

</html>
