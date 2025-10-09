<x-layout.app-layout title="{{ Str::headline(__('beranda')) }}">

    @include('components.layout.navigation')
    <x-wrapper>
        <x-container>
            <div class="w-full h-full aspect-video overflow-hidden bg-slate-200 rounded-lg">

                <img src="" alt="">
            </div>
        </x-container>
    </x-wrapper>
    <x-wrapper class="py-20">
        <x-container>
            <div class="grid grid-cols-12 gap-8 items-center">
                <div class="col-span-full md:col-span-6 order-1 md:order-2">
                    <div class="flex justify-center md:justify-end">
                        <img src="logo-bgn.png" class="w-auto h-auto p-10">
                    </div>
                </div>
                <div class="col-span-full md:col-span-6 order-2 md:order-1">
                    <div class="text-start space-y-2">
                        <h3 class="text-2xl text-yellow-600">
                            Tentang
                        </h3>
                        <h1 class="text-3xl md:text-4xl font-bold text-blue-950">
                            Makan Gizi Gratis (MBG)
                            <span class="font-extrabold text-yellow-600">_</span>
                        </h1>
                        {{-- <h3 class="text-2xl font-normal"> — Seorang programmer dan web developer. </h3> --}}
                        <p class="font-light mt-6">
                            Makan Gizi Gratis (MBG) adalah program penyediaan makanan sehat dan bergizi secara gratis
                            yang diatur dan dibiayai oleh pemerintah. Tujuannya agar masyarakat — khususnya anak-anak —
                            tidak kekurangan gizi dan dapat tumbuh dengan sehat serta produktif.
                        </p>
                        <p class="font-light mt-6">
                            BGN (Badan Gizi Nasional) adalah Lembaga pelaksana/pengelola program Makan Gizi Gratis (MBG)
                            yang akan merancang, mengatur, mengawasi, dan menjalankan program MBG agar efektif, tepat
                            sasaran, dan berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>

    <x-wrapper class="bg-blue-950 text-white py-20 rounded-4xl">
        <x-container>
            <div class="col-span-full space-y-8 px-4">
                <div class="text-center space-y-2">
                    <h1 class="text-xl font-bold text-white">
                        Instansi yang berkolaborasi mewujudkan program Makan Bergizi Gratis(MBG) untuk mewujudkan
                        Indonesia yang lebih kuat.
                        <span class="font-extrabold text-yellow-600">_</span>
                    </h1>
                    {{-- <h3 class="text-xl font-semibold"> Teknologi yang saya gunakan. </h3> --}}
                </div>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">lorem</span>
                    </div>
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">Lorem, ipsum.</span>
                    </div>
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">lorem</span>
                    </div>
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">Lorem, ipsum dolor.</span>
                    </div>
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">lorem</span>
                    </div>
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">lorem</span>
                    </div>
                    <div class="flex items-center gap-4 bg-white hover:bg-slate-100 px-4 py-2 rounded-lg">
                        <img src="logo.png" class="w-auto h-16 aspect-square">
                        <span class="text-xl text-sky-950">Lorem, ipsum.</span>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>

    <x-wrapper class="py-20">
        <x-container>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full md:col-span-4">
                    <div class="shadow-md rounded-lg">

                        <img src="{{ asset('logo.png') }}" alt="SIMPeg" class="w-auto h-60">
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>
    <x-wrapper class="py-20">
        <x-container>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full mb-8">
                    <div class="text-center space-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                            Kegiatan<span class="font-extrabold text-yellow-600">_</span></h1>
                        <h3 class="text-start md:text-center text-xl font-normal">
                            Kegiatan Pemerintah Kab. Kep. Meranti dalam program penyaluran Makan Bergizi Gratis.
                        </h3>
                    </div>
                </div>
                <div class="col-span-full md:col-span-4">
                    <div class="bg-white rounded-lg shadow-xs gap-4">
                        <div class="aspect-video overflow-hidden rounded-lg"><img src="/project/thumbnail/simpeg.png"
                                alt="SIMPeg"
                                class="bg-slate-200 w-full h-full object-cover transition duration-300 ease-in-out hover:scale-110">
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <div class="flex items-center gap-4">
                        <div class="grow h-px bg-yellow-500"></div><a href="/project"
                            class="inline-flex items-center gap-2 text-base font-normal text-white rounded-lg bg-yellow-500 hover:bg-yellow-800 transition duration-300 ease-in-out px-4 py-2">
                            Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>
    <x-wrapper class="py-20">
        <x-container>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full mb-8">
                    <div class="space-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                            Berita<span class="font-extrabold text-yellow-600">_</span></h1>
                        <h3 class="text-xl font-normal">
                            Berita terkait program Makan Bergizi Gratis.
                        </h3>
                    </div>
                </div>
                <div class="col-span-full md:col-span-4">
                    <div class="bg-white rounded-lg shadow-xs gap-4">
                        <div class="flex flex-col">
                            <div class="aspect-video overflow-hidden rounded-lg"><img
                                    src="/project/thumbnail/simpeg.png" alt="SIMPeg"
                                    class="bg-slate-200 w-full h-full object-cover transition duration-300 ease-in-out hover:scale-110">
                            </div>
                            <div class="p-4 space-y-2">
                                <h1 class="text-2xl font-normal line-clamp-3"><a href="#"
                                        class="hover:underline">SIMPeg</a></h1>
                                <h3 class="text-lg font-normal line-clamp-3">Sistem Informasi Manajemen
                                    Kepegawaian Kabupaten Kepulauan Meranti.</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <div class="flex items-center gap-4">
                        <div class="grow h-px bg-yellow-500"></div><a href="/project"
                            class="inline-flex items-center gap-2 text-base font-normal text-white rounded-lg bg-yellow-500 hover:bg-yellow-800 transition duration-300 ease-in-out px-4 py-2">
                            Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>

    <x-wrapper class="bg-blue-950 text-white py-20 rounded-4xl">
        <x-container>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full md:col-span-4">
                    <img src="{{ asset('logo.png') }}" alt="SIMPeg" class="w-auto h-60">
                </div>
                <div class="col-span-full md:col-span-8">
                    <div class="p-4 space-y-2">
                        <h1 class="text-2xl font-normal line-clamp-3"><a href="#"
                                class="hover:underline">SIMPeg</a></h1>
                        <h3 class="text-lg font-normal line-clamp-3">Sistem Informasi Manajemen
                            Kepegawaian Kabupaten Kepulauan Meranti.</h3>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>
</x-layout.app-layout>
