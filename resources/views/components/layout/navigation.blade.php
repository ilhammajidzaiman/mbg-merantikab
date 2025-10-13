@php
    $dataMenu = [
        (object) [
            'title' => 'Beranda',
            'route' => route('index'),
            'isActive' => request()->routeIs('index'),
            'children' => null,
        ],
        (object) [
            'title' => 'Berita',
            'route' => route('index'),
            'isActive' => null,
            'children' => null,
        ],
        (object) [
            'id' => '1',
            'title' => 'Profil',
            'route' => null,
            'isActive' => null,
            'children' => [
                (object) [
                    'title' => 'Visi Misi',
                    'route' => route('index'),
                ],
                (object) [
                    'title' => 'Profil',
                    'route' => route('index'),
                ],
            ],
        ],
        (object) [
            'title' => 'Layanan',
            'route' => route('index'),
            'isActive' => null,
            'children' => null,
        ],
        (object) [
            'id' => '2',
            'title' => 'Informasi Publik',
            'route' => null,
            'isActive' => null,
            'children' => [
                (object) [
                    'title' => 'Publikasi Dokumen',
                    'route' => route('index'),
                ],
                (object) [
                    'title' => 'Foto',
                    'route' => route('index'),
                ],
                (object) [
                    'title' => 'Vidio',
                    'route' => route('index'),
                ],
            ],
        ],
    ];
@endphp
<header class="w-full fixed top-0 left-0 z-50 bg-white shadow-md">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-4">
        <div class="flex md:flex-1">
            <a href="{{ route('index') }}">
                <div class="col-span-full ">
                    <div class="flex justify-start items-center ">
                        <div class="flex flex-row items-center justify-center gap-2">
                            <img src="{{ asset('logo-meranti.png') }}" alt="" class="h-10 w-auto" />
                            <div class=" self-stretch w-1 h-auto bg-yellow-600 rounded-xl"></div>
                            <div
                                class="flex flex-col flex-wrap justify-start items-start gap-0 font-bold text-xs text-center md:text-left">
                                <span>MBG</span>
                                <span>KABUPATEN</span>
                                <span>KEPULAUAN MERANTI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex md:hidden">
            <button type="button" command="show-modal" commandfor="mobile-menu"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                    aria-hidden="true" class="size-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <el-popover-group class="hidden lg:flex lg:gap-x-5">
            @foreach ($dataMenu as $item)
                @if (empty($item->children))
                    <a wire:navigate href="{{ $item->route ?? null }}"
                        class="{{ $item->isActive ? 'text-yellow-700' : null }} relative rounded-xl transition duration-200 ease-in-out hover:text-yellow-700 group">
                        {{ $item->title ?? null }}
                        <span
                            class="absolute left-1/2 -bottom-1 w-10 h-1 bg-yellow-600 rounded-full -translate-x-1/2 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center"></span>
                    </a>
                @else
                    <div class="relative">
                        <button popovertarget="desktop-menu-{{ $item->id ?? null }}"
                            class="group flex items-center gap-x-1 text-slate-900 hover:text-yellow-700 transition duration-200 ease-in-out rounded-xl">
                            <span class="relative">
                                {{ $item->title ?? null }}
                                <span
                                    class="absolute left-1/2 -bottom-1 w-10 h-1 bg-yellow-700 rounded-full -translate-x-1/2 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-center">
                                </span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="size-4 flex-none text-slate-900 group-hover:text-yellow-800 transition duration-200 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <el-popover id="desktop-menu-{{ $item->id ?? null }}" anchor="bottom" popover
                            class="w-xs max-w-sm overflow-hidden bg-white rounded-xl shadow-sm outline-1 outline-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-150 data-leave:ease-in  divide-y-1 divide-slate-200 ">
                            @foreach ($item->children as $item)
                                <div class="group relative flex items-center gap-4 px-4 py-2 hover:bg-gray-100 ">
                                    <div class="flex-auto">
                                        <a wire:navigate href="{{ $item->route ?? null }}"
                                            class="block text-slate-600 hover:text-yellow-600">
                                            {{ $item->title ?? null }}
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </el-popover>
                    </div>
                @endif
            @endforeach
        </el-popover-group>
    </nav>
    <el-dialog>
        <dialog id="mobile-menu" class="backdrop:bg-transparent md:hidden">
            <div tabindex="0" class="fixed inset-0 focus:outline-none">
                <el-dialog-panel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a wire:navigate href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                                alt="" class="h-8 w-auto" />
                        </a>
                        <button type="button" command="close" commandfor="mobile-menu"
                            class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <div class="-mx-3">
                                    <button type="button" command="--toggle" commandfor="products"
                                        class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 hover:bg-gray-50">
                                        Product
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                            class="size-5 flex-none in-aria-expanded:rotate-180">
                                            <path
                                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Analytics</a>
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Engagement</a>
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Security</a>
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Integrations</a>
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Automations</a>
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Watch
                                            demo</a>
                                        <a wire:navigate href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 hover:bg-gray-50">Contact
                                            sales</a>
                                    </el-disclosure>
                                </div>
                                <a wire:navigate href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 hover:bg-gray-50">Features</a>
                                <a wire:navigate href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 hover:bg-gray-50">Marketplace</a>
                                <a wire:navigate href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a wire:navigate href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>
</header>
