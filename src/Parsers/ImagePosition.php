<?php

namespace Murdercode\LaravelShortcodePlus\Parsers;

use Murdercode\LaravelShortcodePlus\Helpers\ModelHelper;
use Murdercode\LaravelShortcodePlus\Helpers\Sanitizer;

class Image
{
    public static function parse(string $content): string
    {

        return preg_replace_callback(
            '/\[img\s+id="(\d+)"(?:\s+s="(.*?)")?(?:\s+p="(.*?)")?\]/',
            function ($matches) {
                $id_image = $matches[1];
                $size = $matches[2] ? $matches[2] : null;
                $position = $matches[3] ? $matches[3] : null;
                $model = new ModelHelper('image');
                $image = $model->getModelClass()::find($id_image);

                if (! $image) {
                    return 'Image not found';
                }

                $model->setModelInstance($image);
                $size = $size ?: $model->getValueFromInstance('size') ?: null;
                $position = $model->getValueFromInstance('position') ?: null;
                $path = $model->getValueFromInstance('path') ?: null;

                return view(
                    'shortcode-plus::image',
                    compact(
                        'path',
                        'size',
                        'position',
                    )
                )->render();
            },
            $content
        );
    }
}
