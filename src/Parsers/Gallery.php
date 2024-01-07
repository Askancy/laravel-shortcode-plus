<?php

namespace askancy\LaravelShortcodePlus\Parsers;

use askancy\LaravelShortcodePlus\Helpers\ModelHelper;
use askancy\LaravelShortcodePlus\Helpers\Sanitizer;

class Gallery
{
    public static function parse(string $content): string
    {

        return preg_replace_callback(
            '/\[gallery title="(.*?)" images="(.*?)"]/',
            function ($matches) {
                $title = Sanitizer::escapeQuotes($matches[1]);

                $imagesArray = explode(',', $matches[2]);

                $model = new ModelHelper('image');
                $images = $model->getModelClass()::whereIn('id', $imagesArray)->get()->toArray();

                return view('shortcode-plus::gallery', compact('title', 'images'))
                    ->render();
            },
            $content
        );
    }
}
