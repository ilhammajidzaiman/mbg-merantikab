<div class="space-y-8">
    <div class="col-span-full">
        <div class="relative">
            <label for="search" class="sr-only">Search</label>
            <input wire:model.live="search" type="text" name="search" id="search" placeholder="Cari..."
                class="w-full bg-white text-slate-700 placeholder-slate-400 shadow rounded-lg px-5 py-3  pl-13 focus:outline-none focus:ring-1 focus:ring-yellow-600">
            <button type="submit"
                class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-500 hover:text-yellow-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <svg wire:loading wire:target="search" class="animate-spin size-8 fill-yellow-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path
                        d="M286.7 96.1C291.7 113 282.1 130.9 265.2 135.9C185.9 159.5 128.1 233 128.1 320C128.1 426 214.1 512 320.1 512C426.1 512 512.1 426 512.1 320C512.1 233.1 454.3 159.6 375 135.9C358.1 130.9 348.4 113 353.5 96.1C358.6 79.2 376.4 69.5 393.3 74.6C498.9 106.1 576 204 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320C64 204 141.1 106.1 246.9 74.6C263.8 69.6 281.7 79.2 286.7 96.1z" />
                </svg>
            </div>
        </div>
    </div>
    @if ($data->isNotEmpty())
        <div class="grid grid-cols-12 gap-4 space-y-4">
            @foreach ($data as $item)
                <div class="col-span-full md:col-span-4">
                    <div class="flex flex-col space-y-2">
                        <div class="aspect-video overflow-hidden rounded-lg"><img
                                src="{{ Storage::url($item->thumbnail ?? null) }}"
                                class="bg-slate-200 w-full h-full object-cover transition duration-300 ease-in-out hover:scale-110">
                        </div>
                        <h1 class="line-clamp-2">
                            <a wire:navigate href="{{ route('article.show', $item->slug ?? null) }}"
                                class="hover:underline">
                                {{ $item->title ?? null }}
                            </a>
                        </h1>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="col-span-full text-center p-4">
            <img src="{{ asset('transfer-files-bro.svg') }}" alt="image" class="w-auto h-64 mx-auto">
            <h1 class="text-xl">Data tidak ditemukan.</h1>
        </div>
    @endif

    @if ($more)
        <div class="col-span-full">
            <div class="flex items-center gap-4">
                <div class="flex-grow border-b border-yellow-600"></div>
                <button wire:click="loadMore"
                    class="inline-flex items-center gap-2 border border-slate-200 px-4 py-2 rounded-xl bg-yellow-600 hover:bg-yellow-800 text-white transition">
                    Tampilkan Lebih Banyak
                    <svg wire:loading wire:target="loadMore" class="animate-spin size-6 fill-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path
                            d="M286.7 96.1C291.7 113 282.1 130.9 265.2 135.9C185.9 159.5 128.1 233 128.1 320C128.1 426 214.1 512 320.1 512C426.1 512 512.1 426 512.1 320C512.1 233.1 454.3 159.6 375 135.9C358.1 130.9 348.4 113 353.5 96.1C358.6 79.2 376.4 69.5 393.3 74.6C498.9 106.1 576 204 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320C64 204 141.1 106.1 246.9 74.6C263.8 69.6 281.7 79.2 286.7 96.1z" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>
