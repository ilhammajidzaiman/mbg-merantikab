<x-app-layout title="{{ Str::headline(__($record->title ?? null)) }}">
    <x-wrapper class="mt-24">
        <x-container>
            <div class="grid grid-cols-12 gap-4 ">
                @if ($record)
                    <div class="col-span-full  md:col-span-8 space-y-2">
                        <div class="flex space-x-2 items-center font-normal text-slate-500">
                            <a wire:navigate href="{{ route('index') }}" class="hover:underline line-clamp-1">
                                Beranda
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                            <a wire:navigate href="{{ route('article.index') }}" class="hover:underline line-clamp-1">
                                Berita
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                            <a wire:navigate href="{{ route('article.show', $record->slug ?? null) }}"
                                class="hover:underline text-indigo-500 line-clamp-1">
                                {{ Str::limit(strip_tags($record->title ?? null), 30, '...') }}
                            </a>
                        </div>
                        <h1 class="text-2xl text-blue-900">
                            {{ $record->title ?? null }}
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        <h3 class="text-slate-500">
                            {{ $record->formatDayDateTime($record->published_at ?? null) }},
                            Waktu baca
                            {{ $record->readTimeFormatted($record->content ?? null) }}.
                        </h3>
                        <div class="aspect-video overflow-hidden border border-slate-300 bg-slate-200 rounded-xl">
                            <img src="{{ Storage::url($record->file ?? null) }}" alt="image"
                                class="w-full h-full aspect-video object-contain transition duration-300 ease-in-out hover:scale-110">
                        </div>
                        @if ($record->description)
                            <div class="text-slate-500">
                                {{ $record->description ?? null }}
                            </div>
                        @endif
                        @if ($record->attachment)
                            <div
                                class="flex gap-4 overflow-x-auto hide-scrollbar snap-x scroll-smooth border border-slate-300 bg-slate-200 rounded-xl p-4">
                                @foreach ($record->attachment as $item)
                                    <div @click="selected = { file: '{{ Storage::url($item ?? null) }}' };open = true;"
                                        class="flex-none w-auto rounded-xl overflow-hidden snap-center cursor-pointer">
                                        <img src="{{ Storage::url($item ?? null) }}" alt="attachment"
                                            class="w-auto h-32 hover:scale-110 transition duration-300 ease-in-out rounded-xl">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="space-y-2 content">
                            {!! $record->content ?? null !!}
                        </div>
                        @if ($record->tags)
                            <div class="text-slate-500">
                                <p class=" mb-2">Topik:</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($record->tags as $item)
                                        <div class="w-fit rounded-lg bg-indigo-500 text-white line-clamp-1 px-2 py-1">
                                            {{ $item->title ?? null }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
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
</x-app-layout>
