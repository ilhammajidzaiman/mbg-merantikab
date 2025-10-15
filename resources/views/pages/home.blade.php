<x-app-layout title="{{ Str::headline(__('beranda')) }}">
    <x-wrapper id="carousel" class="mt-22">
        <x-container>
            @if ($carousel->isNotEmpty())
                <div x-data="{
                    active: 0,
                    total: {{ count($carousel) }},
                    timer: null,
                
                    next() {
                        this.active = (this.active + 1) % this.total
                        this.restart()
                    },
                    prev() {
                        this.active = (this.active - 1 + this.total) % this.total
                        this.restart()
                    },
                    goTo(index) {
                        this.active = index
                        this.restart()
                    },
                    restart() {
                        clearInterval(this.timer)
                        this.timer = setInterval(() => this.next(), 4000)
                    },
                    init() {
                        this.timer = setInterval(() => this.next(), 4000)
                    }
                }"
                    class="relative w-full aspect-square md:aspect-video overflow-hidden rounded-lg shadow-md">
                    {{-- Gambar --}}
                    @foreach ($carousel as $index => $item)
                        <div x-show="active === {{ $index }}" x-cloak
                            x-transition:enter="transition-opacity duration-700 ease-in"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity duration-700 ease-out"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="absolute inset-0 w-full h-full">
                            <img src="{{ Storage::url($item->file ?? null) }}" alt="image"
                                class="w-full h-full object-cover rounded-lg">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-slate-700/30 text-shadow-md text-white text-center font-medium text-xl p-4 h-24 flex items-center justify-center">
                                <p class="line-clamp-2">
                                    {{ $item->title }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="hidden md:block">
                        <button @click="prev"
                            class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/80 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button @click="next"
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/80 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:flex absolute bottom-2 left-0 right-0 justify-center gap-2">
                        @foreach ($carousel as $index => $_)
                            <button @click="goTo({{ $index }})"
                                :class="active === {{ $index }} ? 'bg-white' : 'bg-white/40'"
                                class="w-3 h-3 rounded-full transition-all duration-300">
                            </button>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center p-4">
                    <img src="{{ asset('transfer-files-bro.svg') }}" alt="image" class="w-auto h-64 mx-auto">
                    <h1 class="text-xl">Data tidak ditemukan.</h1>
                </div>
            @endif
        </x-container>
    </x-wrapper>

    <x-wrapper id="about" class="py-20">
        <x-container>
            <div class="grid grid-cols-12 gap-8 items-center">
                <div class="col-span-full md:col-span-6 order-1 md:order-2">
                    <div class="flex justify-center md:justify-end">
                        <img src="logo-bgn.png" class="w-auto h-auto px-10">
                    </div>
                </div>
                <div class="col-span-full md:col-span-6 order-2 md:order-1">
                    <div class="text-start space-y-2">
                        <h3 class="text-2xl text-yellow-600">
                            Tentang
                        </h3>
                        <h1 class="text-3xl md:text-4xl font-bold text-blue-950">
                            Makan Bergizi Gratis (MBG)
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        {{-- <h3 class="text-2xl font-normal"> — Seorang programmer dan web developer. </h3> --}}
                        <p class="font-light mt-6">
                            Makan Bergizi Gratis (MBG) adalah program penyediaan makanan sehat dan bergizi secara gratis
                            yang diatur dan dibiayai oleh pemerintah. Tujuannya agar masyarakat — khususnya anak-anak —
                            tidak kekurangan gizi dan dapat tumbuh dengan sehat serta produktif.
                        </p>
                        <p class="font-light mt-6">
                            BGN (Badan Gizi Nasional) adalah Lembaga pelaksana/pengelola program Makan Gizi Gratis (MBG)
                            yang merancang, mengatur, mengawasi, dan menjalankan program MBG agar efektif, tepat
                            sasaran, dan berkelanjutan.
                        </p>
                        <p class="font-light mt-6">
                            Tim terdiri dari berbagai golongan, yang semuanya berdedikasi untuk mencapai tujuan BGN
                            dalam pemenuhan Makan Gizi Gratis (MBG)
                        </p>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>

    <x-wrapper id="shortcut" class="bg-blue-950 text-white py-20 rounded-4xl">
        <x-container>
            @if ($shortcut->isNotEmpty())
                <div class="col-span-full space-y-8 px-4">
                    <div class="text-center space-y-2">
                        <h1 class="text-xl text-white">
                            Instansi yang berkolaborasi mewujudkan program Makan Bergizi Gratis(MBG) untuk mewujudkan
                            Indonesia yang lebih kuat
                        </h1>
                    </div>
                    <div class="flex flex-wrap justify-center gap-4">
                        @foreach ($shortcut as $item)
                            <div
                                class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg transition duration-300 ease-in-out hover:scale-105 ">
                                <img src="{{ Storage::url($item->link->file) }}" class="w-auto h-16 aspect-square">
                                <span class="text-xl text-sky-950">{{ $item->link->title ?? null }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center p-4">
                    <img src="{{ asset('transfer-files-bro.svg') }}" alt="image" class="w-auto h-64 mx-auto">
                    <h1 class="text-xl">Data tidak ditemukan.</h1>
                </div>
            @endif
        </x-container>
    </x-wrapper>

    <x-wrapper id="sasaran" class="py-20">
        <x-container>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full mb-8">
                    <div class="space-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                            Sasaran
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        <h3 class="text-xl font-normal">
                            Sasaran program Makan Bergizi Gratis Mendukung kesehatan gizi melalui berbagai program untuk
                            memastikan setiap individu mendapatkan kebutuhan gizi yang optimal.
                        </h3>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-full md:grid-cols-3 gap-4">
                @foreach ($sasaran as $item)
                    <div class="flex flex-col">
                        <div
                            class="flex flex-col h-full bg-white shadow-md rounded-lg space-y-2 p-4 transition duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
                            <img src="{{ $item->file ?? null }}" alt="image"
                                class="w-auto h-64 aspect-square p-4" />
                            <h1 class="text-xl font-bold text-blue-900 line-clamp-1">
                                {{ $item->title ?? null }}
                            </h1>
                            <h3 class="text-yellow-600 text-normal line-clamp-1">
                                {{ $item->subtitle ?? null }}
                            </h3>
                            <p class="flex-1">
                                {{ $item->description ?? null }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-container>
    </x-wrapper>

    <x-wrapper id="berita" class="py-20 bg-white">
        <x-container>
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-full mb-8">
                    <div class="space-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                            Berita Terkait
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        <h3 class="text-xl font-normal">
                            Berita terkait program Makan Bergizi Gratis.
                        </h3>
                    </div>
                </div>
                @if ($berita)
                    {{-- @if ($berita->isNotEmpty()) --}}
                    @foreach ($berita as $item)
                        <div class="col-span-full md:col-span-4">
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
                        </div>
                    @endforeach

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

    <x-wrapper id="kegiatan" class="py-20">
        <x-container>
            <div x-data="{ open: false, selected: {} }" class="relative">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-full mb-8">
                        <div class="text-center space-y-2">
                            <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                                Kegiatan<span class="font-extrabold text-yellow-600">_</span>
                            </h1>
                            <h3 class="text-start md:text-center text-xl font-normal">
                                Kegiatan Pemerintah Kab. Kep. Meranti dalam program penyaluran Makan Bergizi Gratis.
                            </h3>
                        </div>
                    </div>
                    @if ($kegiatan)
                        {{-- @if ($kegiatan->isNotEmpty()) --}}

                        @foreach ($kegiatan as $item)
                            <div class="col-span-full md:col-span-4">
                                <div class="bg-white rounded-lg shadow-xs gap-4 cursor-pointer"
                                    @click="selected = { file: '{{ $item->file ?? null }}', description: '{{ $item->description ?? 'Tidak ada deskripsi.' }}' }; open = true;">
                                    <div class="aspect-video overflow-hidden rounded-lg">
                                        <img src="{{ $item->file }}"
                                            class="bg-slate-200 w-full h-full object-cover transition duration-300 ease-in-out hover:scale-110">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-span-full">
                            <div class="flex items-center gap-4">
                                <div class="grow h-px bg-yellow-600"></div>
                                <a wire:navigate href="{{ route('index') }}"
                                    class="inline-flex items-center gap-2 text-base font-normal text-white rounded-lg bg-yellow-600 hover:bg-yellow-800 transition duration-300 ease-in-out px-4 py-2">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="col-span-full text-center p-4">
                            <img src="{{ asset('transfer-files-bro.svg') }}" alt="image"
                                class="w-auto h-64 mx-auto">
                            <h1 class="text-xl">Data tidak ditemukan.</h1>
                        </div>
                    @endif
                </div>
                {{-- <template x-teleport="body">
                    <div x-show="open" x-cloak class="fixed inset-0 z-50 flex items-center justify-center">
                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity ease-in duration-500 delay-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="absolute inset-0 bg-slate-800/50 backdrop-blur-xs" @click="open = false">
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-500 delay-200"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="relative bg-white rounded-xl shadow-lg max-w-3xl w-full mx-4 overflow-hidden z-10">
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-slate-500 hover:text-slate-800 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="aspect-video bg-slate-200">
                                <img :src="selected.file" alt="image" class="w-full h-full object-contain">
                            </div>
                            <div x-text="selected.description" class="p-4"></div>
                        </div>
                    </div>
                </template> --}}

                <template x-teleport="body">
                    <!-- Wrapper utama -->
                    <div x-show="open" x-cloak class="fixed inset-0 z-50 flex items-center justify-center">

                        <!-- Backdrop -->
                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity ease-in duration-500 delay-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="absolute inset-0 bg-slate-800/50 backdrop-blur-xs z-40" @click.self="open = false">
                        </div>

                        <!-- Modal -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-500 delay-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="relative bg-white rounded-xl shadow-lg max-w-3xl w-full mx-4 overflow-hidden z-50"
                            @click.self="open = false">
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-slate-500 hover:text-slate-800 z-20">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <div class="aspect-video bg-slate-200">
                                <img :src="selected.file" alt="image" class="w-full h-full object-contain">
                            </div>

                            <div x-text="selected.description" class="p-4"></div>
                        </div>
                    </div>
                </template>

            </div>
        </x-container>
    </x-wrapper>

    <x-wrapper id="pengaduan" class="bg-blue-950 text-white py-20 rounded-4xl">
        <x-container>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full md:col-span-4">
                    <img src="{{ asset('logo.png') }}" class="w-auto h-60">
                </div>
                <div class="col-span-full md:col-span-8">
                    <div class="space-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold text-white">
                            Pengaduan
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        <h3 class="text-xl font-normal">
                            Suarakan Pengaduanmu untuk Layanan Gizi yang Lebih Baik!
                        </h3>
                        <p class="mb-4">
                            Badan Gizi Nasional kini terhubung dengan SP4N LAPOR! untuk menerima pengaduan dan laporan
                            dari masyarakat. Laporkan permasalahan terkait layanan gizi secara cepat dan mudah melalui
                            platform resmi. Bersama kita wujudkan pelayanan yang lebih responsif dan transparan.
                        </p>
                        <a wire:navigate href="https://bgn.lapor.go.id/" target="_blank"
                            class="rounded-lg bg-yellow-600 hover:bg-yellow-700 px-4 py-2">
                            Pengaduan
                        </a>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>
    </x-layout.app-layout>
