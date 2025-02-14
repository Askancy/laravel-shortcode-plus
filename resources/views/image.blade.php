<div class="relative block">
    @if ($credits)
        <span
            class="block absolute right-0 px-1 py-0.5 text-xs text-gray-600 bg-white not-prose dark:bg-gray-900 dark:text-gray-300 opacity-60 z-10">
            {{ $credits }}
        </span>
    @endif
    <figure>
        {{-- <a href="{{ asset('storage/' . $path) }}" class="glightbox" data-glightbox="{{ addslashes($title) }}"> --}}
        <img class="mx-auto cursor-pointer" src="{{ Storage::disk('s3_gallery')->url($path) }}" alt="{{ $alternative_text }}"
            title="Clicca per vedere l'immagine originale" loading="lazy" width="{{ $width }}"
            height="{{ $height }}" />
        {{-- </a> --}}
        @if ($caption)
            <figcaption class="px-2 py-1.5 font-sans text-base">
                {!! $caption !!}
            </figcaption>
        @endif
    </figure>
</div>
