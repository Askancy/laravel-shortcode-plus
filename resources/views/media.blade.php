@if($path)

    <div class="relative block">
        @if(isset($credits))
            <span
                class="block absolute right-0 px-1 py-0.5 text-xs text-gray-600 bg-white not-prose dark:bg-gray-900 dark:text-gray-300 opacity-60 z-10">
		        {{ $credits }}
		    </span>
        @endif

        <figure class="relative" style=";@if($align) float: {{$align}}; @endif">

            @if($link)
                <a class="stretched-link" target="_blank" href="{!! $link !!}" rel="nofollow norefereer sponsored">
                    @else
                        <a class="stretched-link glightbox hover:brightness-110 !no-underline"
                           href="{{Storage::disk('s3_gallery')->url($path)}}">
                            @endif

                            <img class="!my-0 mx-auto @if($shape === 'rounded') rounded-full @endif"
                                 src="{{Storage::disk('s3_gallery')->url($path)}}?width={{ $width }}"
                                 srcset="
                                     {{Storage::disk('s3_gallery')->url($path)}}?width=358 400w,
                                     {{Storage::disk('s3_gallery')->url($path)}}?width=607 640w,
                                     {{Storage::disk('s3_gallery')->url($path)}}?width=735 768w,
                                     {{Storage::disk('s3_gallery')->url($path)}}?width={{$width}} 1024w,
                                 "
                                 alt="{{ $alt }}"
                                 title="{{ $title }}" loading="lazy" width="{{ $width }}"
                                 height="{{ $height }}"/>
                            @if($didascalia)
                                <figcaption
                                    class="!mt-0 font-sans !text-sm py-2 px-4 bg-zinc-200 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-200">
                                    {!! html_entity_decode($didascalia) !!}
                                </figcaption>
                            @endif
                        </a>
        </figure>

    </div>

@endif
