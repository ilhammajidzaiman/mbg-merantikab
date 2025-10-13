<x-layout.app-layout title="{{ Str::headline(__('beranda')) }}">

    @include('components.layout.navigation')
    <x-wrapper class="mt-22">

        <x-container>
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-full  md:col-span-8 space-y-2">
                    <div class="flex space-x-2 items-center font-normal text-slate-500">
                        <a wire:navigate href="" class="hover:underline line-clamp-1">
                            Berita
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                        </svg>
                        <a wire:navigate href="" class="hover:underline text-indigo-500 line-clamp-1">
                            {{ $record->category->title ?? null }}
                        </a>
                    </div>
                    <h1 class="text-2xl text-blue-900">
                        {{ $record->title ?? null }}
                        <span class="font-extrabold text-yellow-600">_</span>
                    </h1>
                    <h3 class="text-slate-500">
                        senin, 13 Oktober 2025,
                        Waktu baca
                        2 Menit 35 Detik
                    </h3>
                    <div class="aspect-video overflow-hidden border border-slate-300 bg-slate-200 rounded-xl">
                        <img src="{{ asset('motherhood-bro.svg') }}" alt="image"
                            class="w-full h-full aspect-video object-contain transition duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="text-slate-500">
                        {{ $record->description ?? null }}
                    </div>
                    {{-- @if ($record->attachment)
                        <div
                            class="flex gap-4 overflow-x-auto hide-scrollbar snap-x scroll-smooth border border-slate-300 bg-slate-200 rounded-xl p-4">
                            @foreach ($record->attachment as $file)
                                <div @click="selected = { file: '{{ Storage::url($file ?? null) }}' };open = true;"
                                    class="flex-none w-auto rounded-xl overflow-hidden snap-center cursor-pointer">
                                    <img src="{{ Storage::url($file ?? null) }}" alt="attachment"
                                        class="w-auto h-32 hover:scale-110 transition duration-300 ease-in-out rounded-xl">
                                </div>
                            @endforeach
                        </div>
                        <x-modal>
                            <img :src="selected.file" alt="image preview"
                                class="w-full h-full object-contain rounded-xl">
                        </x-modal>
                    @endif --}}
                    <div class="space-y-2 content">
                        {!! $record->content ?? null !!}
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>


</x-layout.app-layout>
