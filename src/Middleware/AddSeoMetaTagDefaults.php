<?php

namespace MartinRo\FilamentSeoMetaTags\Middleware;

use Closure;
use Illuminate\Http\Request;
use romanzipp\Seo\Structs\Link;
use romanzipp\Seo\Structs\Meta;

class AddSeoMetaTagDefaults
{
    public function handle(Request $request, Closure $next)
    {
        seo()->title(config('app.name'));
        seo()->description(config('app.name'));

        // can't be overridden
        seo()->meta('theme-color', '#ffffff');
        seo()->add(Meta::make()->attr('name', 'manifest')->attr('href', asset('site.webmanifest')));

        seo()->canonical(url()->current());

        seo()->og('locale', app()->getLocale());
        seo()->og('site_name', config('app.name'));
        seo()->og('type', 'website');
        seo()->og('url', url()->current());

        // can't be overridden
        seo()->add(Link::make()->href(url()->current())->rel('alternate')->attr('hreflang', 'x-default'));

        seo()->og('locale', app()->getLocale());
        seo()->og('site_name', config('app.name'));
        seo()->og('type', 'website');
        seo()->og('url', url()->current());

        seo()->og('image', 'https://via.placeholder.com/1200x630.png?text='.urlencode(config('app.name')));
        seo()->og('image:alt', config('app.name'));

        return $next($request);
    }
}
