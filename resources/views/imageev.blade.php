<a class="itemgallery" href="{{ Storage::disk('s3_gallery')->url($path) }}">
    <img src="{{ Storage::disk('s3_gallery')->url($path) }}" data-align="{{ $position }}" data-size="{{ $size }}">
</a>
