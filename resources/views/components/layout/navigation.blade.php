<header class="sticky top-0 z-10 pt-2">
    <x-public.wrapper>
        <x-public.container>
            <header class="bg-indigo-500 rounded-t-xl bg-[url(/public/image/background/signal.svg)] bg-center bg-repeat">
                <nav aria-label="Global" class="flex items-center justify-between p-4">
                    <div class="flex md:flex-1">
                        <a href="{{ route('index') }}">
                            <div class="col-span-full ">
                                <div class="flex justify-start items-center ">
                                    <div class="flex flex-row items-center justify-center gap-2 md:gap-4">
                                        <div
                                            class="font-bold text-4xl text-center bg-gradient-to-r from-orange-500 to-slate-100 bg-clip-text text-transparent">
                                            MY NEWS
                                        </div>
                                        <div class=" self-stretch w-1 h-auto bg-white rounded-xl"></div>
                                        <div
                                            class="flex flex-col flex-wrap justify-start items-start gap-0 font-medium text-xs text-center md:text-left text-white ">
                                            <span>SAJIAN</span>
                                            <span>BERITA</span>
                                            <span>ANDA</span>
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
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:flex md:flex-1 md:justify-end">
                        <form action="/search" method="GET" class="relative w-full md:w-72">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" name="search" id="search" placeholder="Mau cari berita apa?"
                                class="w-full border border-white rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 bg-white/20 backdrop-blur-xs text-white placeholder-white/80">
                            <button type="submit"
                                class="absolute inset-y-0 left-0 flex items-center pl-3 text-white hover:text-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </nav>
                <el-dialog>
                    <dialog id="mobile-menu" class="backdrop:bg-transparent md:hidden">
                        <div tabindex="0" class="fixed inset-0 focus:outline-none">
                            <el-dialog-panel
                                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('index') }}">
                                        <div class="col-span-full ">
                                            <div class="flex justify-start items-center ">
                                                <div class="flex flex-row items-center justify-center gap-2 md:gap-4">
                                                    <div
                                                        class="font-bold text-4xl text-center bg-gradient-to-r from-orange-500 to-indigo-500 bg-clip-text text-transparent">
                                                        MY NEWS
                                                    </div>
                                                    <div class=" self-stretch w-1 h-auto bg-indigo-500 rounded-xl">
                                                    </div>
                                                    <div
                                                        class="flex flex-col flex-wrap justify-start items-start gap-0 font-medium text-xs text-center md:text-left text-indigo-500 ">
                                                        <span>SAJIAN</span>
                                                        <span>BERITA</span>
                                                        <span>ANDA</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" command="close" commandfor="mobile-menu"
                                        class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                        <span class="sr-only">Close menu</span>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            data-slot="icon" aria-hidden="true" class="size-6">
                                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-6 flow-root">
                                    <div class="-my-6 divide-y divide-gray-500/10">
                                        <div class="space-y-2 py-6">
                                            <div class="-mx-3">
                                                <button type="button" command="--toggle" commandfor="products"
                                                    class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                                                    Product
                                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon"
                                                        aria-hidden="true"
                                                        class="size-5 flex-none in-aria-expanded:rotate-180">
                                                        <path
                                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                            clip-rule="evenodd" fill-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch
                                                        demo</a>
                                                    <a href="#"
                                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact
                                                        sales</a>
                                                </el-disclosure>
                                            </div>
                                            <a href="#"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                            <a href="#"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                            <a href="#"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                                        </div>
                                        <div class="py-6">
                                            <a href="#"
                                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                                in</a>
                                        </div>
                                    </div>
                                </div>
                            </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>
            </header>
            <div class="col-span-full">
                <div
                    class="bg-orange-500 text-white font-normal text-base rounded-b-xl px-4 py-2 bg-[url(/public/image/background/signal.svg)] bg-center bg-repeat">
                    <div class="flex overflow-x-auto hide-scrollbar gap-4 ">
                        @foreach ($category as $item)
                            <a href="" class="hover:underline">
                                {{ $item->title ?? null }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </x-public.container>
    </x-public.wrapper>
</header>
