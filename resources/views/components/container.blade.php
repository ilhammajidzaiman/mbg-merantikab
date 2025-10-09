<div {{ $attributes->merge(['class' => 'w-full md:max-w-7xl mx-auto px-4 py-2']) }}>
    {{ $slot ?? null }}
</div>
