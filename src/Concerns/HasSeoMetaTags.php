<?php

namespace MartinRo\FilamentSeoMetaTags\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use MartinRo\FilamentSeoMetaTags\Models\SeoMetaTag;

trait HasSeoMetaTags
{
    public function seoMetaTags(): MorphOne
    {
        return $this->morphOne(SeoMetaTag::class, 'model');
    }
}
