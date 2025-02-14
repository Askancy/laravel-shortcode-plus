<?php

namespace Murdercode\LaravelShortcodePlus;

use Murdercode\LaravelShortcodePlus\Parsers\Gallery;
use Murdercode\LaravelShortcodePlus\Parsers\Image;
use Webwizo\Shortcodes\Facades\Shortcode;

final class LaravelShortcodePlus
{
    public function __construct(protected string $content = '')
    {
    }

    public static function source(string $source): LaravelShortcodePlus
    {
        return new self($source);
    }

    /**
     * A function that returns the parsed content.
     */
    public function parseAll(): string
    {
        $this->content = $this->parseImageTag();
        $this->content = $this->parseGalleryTag();

        return Shortcode::compile($this->content);
    }

    public function parseImageTag(): string
    {
        return Image::parse($this->content);
    }

    public function parseGalleryTag(): string
    {
        return Gallery::parse($this->content);
    }
}
