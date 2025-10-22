<x-app-layout title="{{ Str::headline(__('galeri')) }}">
    <x-wrapper id="kegiatan" class="mt-24">
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
                    @if ($galery->isNotEmpty())
                        @foreach ($galery as $item)
                            <div class="col-span-full md:col-span-4">
                                <div class="bg-white rounded-lg shadow-xs gap-4 cursor-pointer"
                                    @click="selected = { file: '{{ Storage::url($item->file ?? null) }}', description: '{{ $item->description ?? null }}' }; open = true;">
                                    <div class="aspect-video overflow-hidden rounded-lg">
                                        <img src="{{ Storage::url('thumbnail/' . $item->file ?? null) }}"
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
                        <template x-teleport="body">
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
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <div class="aspect-video bg-slate-200">
                                        <img :src="selected.file" alt="image" class="w-full h-full object-contain">
                                    </div>
                                    <div x-text="selected.description" class="p-4"></div>
                                </div>
                            </div>
                        </template>
                    @else
                        <div class="col-span-full text-center p-4">
                            <img src="{{ asset('transfer-files-bro.svg') }}" alt="image" class="w-auto h-64 mx-auto">
                            <h1 class="text-xl">Data tidak ditemukan.</h1>
                        </div>
                    @endif
                </div>
            </div>
        </x-container>
    </x-wrapper>

    </x-layout.app-layout>
