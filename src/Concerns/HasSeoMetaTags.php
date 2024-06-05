<?php

namespace MartinRo\FilamentSeoMetaTags\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use MartinRo\FilamentSeoMetaTags\Models\SeoMetaTag;

trait HasSeoMetaTags
{
    public function setSeoMetaTags(): void
    {
        seo()->title($this->seoMetaTags?->title);
        seo()->description($this->seoMetaTags?->description);
        seo()->meta('robots', $this->seoMetaTags?->robots);
    }

    public function seoMetaTags(): MorphOne
    {
        return $this->morphOne(config('filament-seo-meta-tags.model', SeoMetaTag::class), 'model');
    }
}
