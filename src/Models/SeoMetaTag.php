<?php

namespace MartinRo\FilamentSeoMetaTags\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoMetaTag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'model_type',
        'model_id',
        'title',
        'description',
        'robots',
    ];

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
