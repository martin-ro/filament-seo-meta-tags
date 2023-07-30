<?php

namespace MartinRo\FilamentSeoMetaTags\Components\Forms;

use Filament\Forms\Components\Textarea;

class SeoTitle
{
    public static function make(string $name = 'title'): Textarea
    {
        return Textarea::make($name)
            ->rows(1)
            ->maxlength(70)
            ->minLength(50)
            ->reactive()
            ->hint(fn ($state, $component) => strlen($state).'/'.$component->getMaxLength())
            ->hintColor(function ($state, $component) {
                if (strlen($state) > $component->getMinLength()) {
                    return 'success';
                }

                if (strlen($state) > 0) {
                    return 'danger';
                }

                return 'gray';
            });
    }
}
