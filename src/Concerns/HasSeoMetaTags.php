<?php

namespace MartinRo\FilamentSeoMetaTags\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use MartinRo\FilamentSeoMetaTags\Models\SeoMetaTag;

trait HasSeoMetaTags
{
    protected static function boot()
    {
        parent::boot();

        static::retrieved(function ($model) {
            $model->setSeoMetaTags();
        });
    }

    public function setSeoMetaTags(): void
    {
        seo()->title($this->seoMetaTags?->title);
        seo()->description($this->seoMetaTags?->description);
        seo()->meta('robots', $this->seoMetaTags?->robots);
    }

    public function seoMetaTags(): MorphOne
    {
        return $this->morphOne(SeoMetaTag::class, 'model');
    }
}
