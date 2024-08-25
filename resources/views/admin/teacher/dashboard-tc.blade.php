@extends('layouts.sidebar')

@section('body')
    <div id="content-area" class="flex-1 p-8 transition-all duration-300 ease-in-out pt-20 md:ml-20">




        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-primary/35 backdrop-blur">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Tambah Guru
                        </h3>
                        <button type="button"
                            class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="jabatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID User</label>
                                <select id="id_user"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Pilih ID User</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="nip"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                                <input type="text" name="nip" id="nip"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="NIP" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" name="nama" id="nama"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nama" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="id_mata_pelajaran"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Mata
                                    Pelajaran</label>
                                <input type="number" name="id_mata_pelajaran" id="id_mata_pelajaran"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="ID Mapel" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="jabatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                                <select id="jabatan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Pilih Jabatan</option>
                                    <option value="">Jabatan 1</option>
                                    <option value="">Jabatan 2</option>
                                    <option value="">Jabatan 3</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center w-full justify-center text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{-- <i class="bi bi-plus-circle"></i> --}}
                            Tambah Guru
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit modal -->
        <div id="edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-primary/35 backdrop-blur">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Guru
                        </h3>
                        <button type="button"
                            class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="jabatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID User</label>
                                <select id="id_user"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Pilih ID User</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="nip"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                                <input type="text" name="nip" id="nip"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="NIP" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" name="nama" id="nama"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nama" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="id_mata_pelajaran"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Mata
                                    Pelajaran</label>
                                <input type="number" name="id_mata_pelajaran" id="id_mata_pelajaran"
                                    class="bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="ID Mapel" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="jabatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                                <select id="jabatan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Pilih Jabatan</option>
                                    <option value="">Jabatan 1</option>
                                    <option value="">Jabatan 2</option>
                                    <option value="">Jabatan 3</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center w-full justify-center text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{-- <i class="bi bi-plus-circle"></i> --}}
                            Edit Guru
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- Tabel List Guru --}}
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
            <div
                class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                <div class="flex justify-between">
                    <div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                        <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                            <div class="flex">
                                <span
                                    class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                    <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                            stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text"
                                class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"
                                placeholder="Search">
                        </div>

                    </div>
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3"
                        type="button">
                        Tambah Guru <i class="bi bi-plus-circle"></i>
                    </button>
                </div>
            </div>
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                ID User</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Profile</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                NIP</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Nama</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                ID Mata Pelajaran</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                Jabatan</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                ID Kelas</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-center text-sm leading-4 text-blue-500 tracking-wider">
                                Action</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">#1</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/images/hadi.jpg') }}" alt="John Michael"
                                        class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">01289293</div>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                Ntah</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                tc</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span class="relative text-xs">IDK</span>
                                </span>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                12 RPL</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-500 text-sm leading-5">
                                <div class="flex items-center justify-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-pencil-fill text-yellow-500"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <button
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-trash3-fill text-red-500"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">#1</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/images/hadi.jpg') }}" alt="John Michael"
                                        class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">01289293</div>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                Ntah</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                tc</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span class="relative text-xs">IDK</span>
                                </span>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                12 RPL</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-500 text-sm leading-5">
                                <div class="flex items-center justify-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-pencil-fill text-yellow-500"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <button
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-trash3-fill text-red-500"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">#1</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/images/hadi.jpg') }}" alt="John Michael"
                                        class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">01289293</div>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                Ntah</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                tc</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span class="relative text-xs">IDK</span>
                                </span>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                12 RPL</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-500 text-sm leading-5">
                                <div class="flex items-center justify-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-pencil-fill text-yellow-500"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <button
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-trash3-fill text-red-500"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">#1</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/images/hadi.jpg') }}" alt="John Michael"
                                        class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">01289293</div>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                Ntah</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                tc</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span class="relative text-xs">IDK</span>
                                </span>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                12 RPL</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-500 text-sm leading-5">
                                <div class="flex items-center justify-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-pencil-fill text-yellow-500"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <button
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-trash3-fill text-red-500"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">#1</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/images/hadi.jpg') }}" alt="John Michael"
                                        class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">01289293</div>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                Ntah</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                tc</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span class="relative text-xs">IDK</span>
                                </span>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                12 RPL</td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-500 text-sm leading-5">
                                <div class="flex items-center justify-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-pencil-fill text-yellow-500"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <button
                                        class="w-10 h-10 max-w-[40px] max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button">
                                        <i class="bi bi-trash3-fill text-red-500"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                    <div>
                        <p class="text-sm leading-5 text-blue-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">200</span>
                            of
                            <span class="font-medium">2000</span>
                            results
                        </p>
                    </div>
                    <div class="mb-2">
                        <nav class="relative z-0 inline-flex shadow-sm">
                            <div>
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                    aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="#"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                    1
                                </a>
                                <a href="#"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                    2
                                </a>
                                <a href="#"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                    3
                                </a>
                            </div>
                            <div v-if="pagination.current_page < pagination.last_page">
                                <a href="#"
                                    class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                    aria-label="Next">
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
