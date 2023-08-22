<?php

namespace MartinRo\FilamentSeoMetaTags\Components\Forms;

use Filament\Forms\Components\Textarea;
use MartinRo\FilamentSeoMetaTags\Concerns\HasHintColor;

class SeoTitle
{
    use HasHintColor;

    public static function make(
        string $name = 'title',
        int $minLength = 50,
        int $maxLength = 70,
        int $rows = 1,
        bool $strict = false
    ): Textarea {
        if ($strict) {
            return Textarea::make($name)
                ->rows($rows)
                ->minLength($minLength)
                ->maxlength($maxLength)
                ->live()
                ->hint(fn ($state, $component) => strlen($state).'/'.$component->getMaxLength())
                ->hintColor(fn ($state, $component) => self::getColor(
                    $state,
                    $component->getMinLength(),
                    $component->getMaxLength()
                ));
        }

        return Textarea::make($name)
            ->rows($rows)
            ->live()
            ->hint(fn ($state, $component) => strlen($state).'/'.$component->getExtraInputAttributes()['max-char-count'])
            ->extraInputAttributes(['min-char-count' => $minLength, 'max-char-count' => $maxLength])
            ->hintColor(fn ($state, $component) => self::getColor(
                $state,
                $component->getExtraInputAttributes()['min-char-count'],
                $component->getExtraInputAttributes()['max-char-count']
            ));
    }
}
