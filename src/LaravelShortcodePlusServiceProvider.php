<?php

namespace askancy\LaravelShortcodePlus;

use Illuminate\Support\Facades\Blade;
use askancy\LaravelShortcodePlus\Shortcodes\ButtonShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\DisticoShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\FacebookShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\FaqShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\InstagramShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\LeggiancheShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\PhotoShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\RedditShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\SpoilerShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\SpotifyShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\SurveyShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\TikTokShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\TmdbShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\TwitterShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\WidgetbayShortcode;
use askancy\LaravelShortcodePlus\Shortcodes\YoutubeShortcode;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webwizo\Shortcodes\Facades\Shortcode;
use Webwizo\Shortcodes\ShortcodesServiceProvider;

class LaravelShortcodePlusServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shortcode-plus')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets()
            ->hasMigration('create_laravel-shortcode-plus_table');
    }

    public function packageRegistered()
    {

    }

    public function packageBooted(): void
    {
        Blade::componentNamespace(
            'askancy\LaravelShortcodePlus\View\Components',
            'laravel-shortcode-plus'
        );

        Blade::componentNamespace(
            'askancy\LaravelShortcodePlus\View\Components',
            'laravel-shortcode-plus'
        );
    }

    public function register(): void
    {
        parent::register();
        $this->app->register(ShortcodesServiceProvider::class);

        Shortcode::register('reddit', RedditShortcode::class);
        Shortcode::register('facebook', FacebookShortcode::class);
        Shortcode::register('youtube', YoutubeShortcode::class);
        Shortcode::register('spotify', SpotifyShortcode::class);
        Shortcode::register('instagram', InstagramShortcode::class);
        Shortcode::register('faq', FaqShortcode::class);
        Shortcode::register('spoiler', SpoilerShortcode::class);
        Shortcode::register('twitter', TwitterShortcode::class);
        Shortcode::register('distico', DisticoShortcode::class);
        Shortcode::register('leggianche', LeggiancheShortcode::class);
        Shortcode::register('photo', PhotoShortcode::class);
        Shortcode::register('button', ButtonShortcode::class);
        Shortcode::register('tmdb', TmdbShortcode::class);
        Shortcode::register('tiktok', TikTokShortcode::class);
        Shortcode::register('survey', SurveyShortcode::class);

    }
}
