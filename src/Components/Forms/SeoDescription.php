<?php

namespace MartinRo\FilamentSeoMetaTags\Components\Forms;

use Filament\Forms\Components\Textarea;

class SeoDescription
{
    public static function make(string $name = 'description'): Textarea
    {
        return Textarea::make($name)
            ->rows(2)
            ->maxlength(165)
            ->minLength(150)
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
