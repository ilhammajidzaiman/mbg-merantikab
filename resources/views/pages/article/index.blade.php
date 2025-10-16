<x-app-layout title="{{ Str::headline(__('berita')) }}">
    <x-wrapper id="berita" class="mt-24">
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
                @if ($article->isNotEmpty())
                    @foreach ($article as $item)
                        <div class="col-span-full md:col-span-4">
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <div class="aspect-video overflow-hidden rounded-lg"><img
                                            src="{{ Storage::url($item->file ?? null) }}"
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
    </x-layout.app-layout>
