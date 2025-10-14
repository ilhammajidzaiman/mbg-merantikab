<x-app-layout title="{{ Str::headline(__('dokumen')) }}">
    <x-wrapper id="berita" class="mt-24">
        <x-container>
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-full mb-8">
                    <div class="space-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                            Dokumen
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        <h3 class="text-xl font-normal">
                            Publikasi dokumentasi terkait program Makan Bergizi Gratis.
                        </h3>
                    </div>
                </div>
                @if ($data)
                    {{-- @if ($data->isNotEmpty()) --}}
                    @foreach ($data as $item)
                        {{-- <div class="col-span-full md:col-span-4">
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <div class="aspect-video overflow-hidden rounded-lg"><img
                                            src="{{ $item->file ?? null }}"
                                            class="bg-slate-200 w-full h-full object-cover transition duration-300 ease-in-out hover:scale-110">
                                    </div>
                                    <h1 class="line-clamp-2 mb-4">
                                        <a wire:navigate href="{{ route('article.show', $item->slug ?? null) }}"
                                            class="hover:underline">
                                            {{ $item->title ?? null }}
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                    <div class="col-span-full">
                        <div class="overflow-hidden flex items-center gap-4 shadow rounded-lg bg-white hover:shadow-md">

                            <div
                                class="w-36 h-52 flex items-center justify-center overflow-hidden rounded-lg shrink-0 bg-slate-200">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-10 text-yellow-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                    </path>
                                </svg>


                            </div>
                            <div class="p-4">
                                <h3 class="text-slate-500 text-normal line-clamp-1">
                                    Senin, 11 Agustus 2025
                                </h3>
                                <h1 class="text-slate-500 text-lg font-medium line-clamp-3">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate eius praesentium
                                    cumque, nostrum perferendis cum. Nesciunt molestias recusandae optio commodi
                                    consectetur.
                                </h1>
                                <div class="mt-4 flex justify-start">
                                    <a wire:navigate=""
                                        href="https://dev.merantikab.go.id/publikasi-dokumen/perbup-analisis-standar-belanja-tahun-anggaran-2025"
                                        class="inline-flex items-center gap-2 px-3 py-1 border border-slate-200 rounded-lg  hover:bg-yellow-600 hover:text-white transition">
                                        Selengkapnya
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <div class="overflow-hidden flex items-center gap-4 shadow rounded-lg bg-white hover:shadow-md">

                            <div
                                class="w-36 h-52 flex items-center justify-center overflow-hidden rounded-lg shrink-0 bg-slate-200">

                                <img src="https://admin-merantikab.merantikab.go.id/storage/dokumen/cover2025/4dFY94yBOqMVaGeAJJYPkJFcTVv66d-metaZG93bmxvYWQucG5n-.png"
                                    alt="image"
                                    class="w-full h-full object-cover transition duration-300 ease-in-out hover:scale-110">


                            </div>
                            <div class="p-4">
                                <h3 class="text-slate-500 text-normal line-clamp-1">
                                    Senin, 29 September 2025
                                </h3>
                                <h1 class="text-slate-500 text-lg font-medium line-clamp-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eos aut repellat
                                    corporis mollitia velit ipsa voluptatum tenetur eaque laborum at quos, ad ex
                                    sapiente nulla consectetur laudantium nam ab.
                                </h1>
                                <div class="mt-4 flex justify-start">
                                    <a wire:navigate=""
                                        href="https://dev.merantikab.go.id/publikasi-dokumen/pengumuman-bantuan-pendidikan-pemerintah-daerah-kabupaten-kepulauan-meranti-tahun-anggaran-2025"
                                        class="inline-flex items-center gap-2 px-3 py-1 border border-slate-200 rounded-lg hover:bg-yellow-600 hover:text-white transition">
                                        Selengkapnya
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-full">
                        <div class="flex items-center gap-4">
                            <div class="grow h-px bg-yellow-600"></div>
                            <a wire:navigate href="{{ route('article.index') }}"
                                class="inline-flex items-center gap-2 text-base font-normal text-white rounded-lg bg-yellow-600 hover:bg-yellow-800 transition duration-300 ease-in-out px-4 py-2">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                @else
                    <div class="col-span-full text-center p-4">
                        <img src="{{ asset('transfer-files-bro.svg') }}" alt="image" class="w-auto h-64 mx-auto">
                        <h1 class="text-xl">Data tidak ditemukan.</h1>
                    </div>
                @endif
            </div>
        </x-container>
    </x-wrapper>
    </x-layout.app-layout>
