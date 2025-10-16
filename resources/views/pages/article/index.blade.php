<x-app-layout title="{{ Str::headline(__('berita')) }}">
    <x-wrapper id="berita" class="mt-24">
        <x-container class="space-y-4">
            <div class="space-y-2">
                <h1 class="text-4xl md:text-4xl font-bold text-blue-900">
                    Berita Terkait
                    <span class="font-extrabold text-yellow-600">_</span>
                </h1>
                <h3 class="text-xl font-normal">
                    Berita terkait program Makan Bergizi Gratis.
                </h3>
            </div>
            <livewire:article />
        </x-container>
    </x-wrapper>
    </x-layout.app-layout>
