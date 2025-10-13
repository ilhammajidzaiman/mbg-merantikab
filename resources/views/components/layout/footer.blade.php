<x-wrapper class="pt-20">
    <x-container>
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-full">
                <div class="flex md:flex-1">
                    <a wire:navigate href="{{ route('index') }}">
                        <div class="col-span-full ">
                            <div class="flex justify-start items-center ">
                                <div class="flex flex-row items-center justify-center gap-2">
                                    <img src="{{ asset('logo-meranti.png') }}" alt="" class="w-auto h-14" />
                                    <div class=" self-stretch w-1 h-auto bg-yellow-600 rounded-xl"></div>
                                    <div
                                        class="flex flex-col flex-wrap justify-start items-start gap-0 font-bold text-xl">
                                        <span>MBG</span>
                                        <span>KABUPATEN</span>
                                        <span>KEPULAUAN MERANTI</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-span-full md:col-span-4">
                <div class="space-y-2">
                    <h1 class="text-lg font-bold text-blue-900">
                        Navigasi
                        <span class="font-extrabold text-yellow-600">_</span>
                    </h1>
                    <h3 class="text-base font-normal">
                        Beranda
                    </h3>
                    <h3 class="text-base font-normal">
                        Berita
                    </h3>
                    <h3 class="text-base font-normal">
                        Sppg Operasional
                    </h3>
                </div>
            </div>
            <div class="col-span-full md:col-span-4">
                <div class="space-y-2">
                    <h1 class="text-lg font-bold text-blue-900">
                        Alamat
                        <span class="font-extrabold text-yellow-600">_</span>
                    </h1>
                    <div class="flex items-start space-x-2">
                        <div class="w-fit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-slate-600">
                                <path fill-rule="evenodd" d=" m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975
16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0
3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6
3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-base">Jalan, Kec. Tebing Tinggi, Selatpanjang, 28753</h3>
                    </div>
                    <div class="flex items-start space-x-2">
                        <div class="w-fit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-slate-600">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-base">+62812 3456 7890</h3>
                    </div>
                    <div class="flex items-start space-x-2">
                        <div class="w-fit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-slate-600">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                        </div>
                        <h3 class="text-base">diskominfotik@merantikab.go.id</h3>
                    </div>
                </div>
            </div>
            <div class="col-span-full md:col-span-4">
                <div class="space-y-2">
                    <h1 class="text-lg font-bold text-blue-900">
                        Sosial Media
                        <span class="font-extrabold text-yellow-600">_</span>
                    </h1>
                    <div class="flex flex-col">
                        <nav class="flex gap-4"><button type="button" title="whatsapp"
                                class="w-10 aspect-square flex items-center justify-center rounded-xl bg-blue-900 hover:bg-blue-950 text-white">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-whatsapp size-6" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232">
                                        </path>
                                    </svg></div>
                            </button><button type="button" title="facebook"
                                class="w-10 aspect-square flex items-center justify-center rounded-xl bg-blue-900 hover:bg-blue-950 text-white">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-facebook size-6" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951">
                                        </path>
                                    </svg></div>
                            </button><button type="button" title="telegram"
                                class="w-10 aspect-square flex items-center justify-center rounded-xl bg-blue-900 hover:bg-blue-950 text-white">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-telegram size-6" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09">
                                        </path>
                                    </svg></div>
                            </button><button type="button" title="x"
                                class="w-10 aspect-square flex items-center justify-center rounded-xl bg-blue-900 hover:bg-blue-950 text-white">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-twitter-x size-6" viewBox="0 0 16 16">
                                        <path
                                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z">
                                        </path>
                                    </svg></div>
                            </button><button type="button" title="share"
                                class="w-10 aspect-square flex items-center justify-center rounded-xl bg-blue-900 hover:bg-blue-950 text-white">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-share size-6" viewBox="0 0 16 16">
                                        <path
                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3">
                                        </path>
                                    </svg></div>
                            </button></nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-px w-full bg-slate-300 mt-8"></div>
        <p class="text-base text-slate-500 my-4">&copy; {{ date('Y') }} All Right Reserved</p>
    </x-container>
</x-wrapper>
