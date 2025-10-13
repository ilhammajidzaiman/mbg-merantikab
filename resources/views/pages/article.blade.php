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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi animi est iste laborum
                        libero dolorem! Aliquam necessitatibus magnam labore repellendus beatae? Accusantium, non
                        esse.
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nam. Libero quas qui minima.
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolorum doloremque
                            blanditiis magnam maiores eum iste id rerum, esse corrupti natus laborum sequi non
                            recusandae itaque, aliquid quam cupiditate illo est maxime necessitatibus molestias modi
                            tenetur hic! Magni delectus reprehenderit dignissimos neque earum? Et quasi nemo iste
                            tenetur ipsum repellendus perferendis nulla molestias temporibus nihil repudiandae officia
                            cum, expedita vitae. Consequatur et quasi quas, veritatis, magnam tempore eaque iste omnis
                            eius nobis assumenda illo nam quae unde laborum corrupti, possimus aliquam. Dolor nostrum
                            vitae atque inventore impedit fugiat, eum nisi explicabo provident, ex ad sit deserunt
                            ducimus nulla officiis. Necessitatibus suscipit temporibus corporis quidem facere quos
                            placeat cumque recusandae soluta itaque ipsam ad dolor consequatur nulla veniam tenetur, sit
                            eaque reprehenderit porro atque minima nihil? Praesentium velit aut provident laboriosam,
                            labore quidem ullam minima assumenda! Consequuntur nemo qui tenetur totam eligendi nesciunt
                            illo harum omnis modi exercitationem eaque dicta, aut reiciendis quibusdam molestiae. Fugit
                            aliquid quaerat qui dolore asperiores ad, id accusamus, libero commodi odit enim adipisci
                            corporis tempore nihil aut error reprehenderit eaque in ut nisi animi rem nostrum cum sit!
                            Quisquam labore laudantium ipsum, alias qui mollitia inventore tempora odit porro,
                            consectetur recusandae delectus dolorem facere soluta? Distinctio.
                        </p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit eaque dolorum voluptas quo
                            provident sapiente natus explicabo, aperiam necessitatibus molestias deleniti, qui sint, eos
                            quibusdam omnis odio doloribus nemo. Totam dicta eum nihil fugiat molestiae quae vel omnis
                            dignissimos, sit impedit ducimus perspiciatis blanditiis voluptatem eos tenetur. Aliquid,
                            delectus! Labore libero cupiditate, dolore quae dignissimos nemo nam, tenetur temporibus
                            eligendi, fuga totam sapiente dolorem laborum nihil maxime repellendus sequi molestias
                            quibusdam asperiores unde sint harum delectus ea? Rem porro facere optio laboriosam atque
                            esse ab sed neque recusandae nam a dicta iure, tenetur consectetur nulla numquam velit
                            explicabo, ea similique!
                        </p>
                    </div>
                </div>
            </div>
        </x-container>
    </x-wrapper>


</x-layout.app-layout>
