<?php

namespace MartinRo\FilamentSeoMetaTags\Components\Forms;

use Filament\Forms\Components\Textarea;
use MartinRo\FilamentSeoMetaTags\Concerns\HasHintColor;

class SeoDescription
{
    use HasHintColor;

    public static function make(
        string $name = 'description',
        int $minLength = 150,
        int $maxLength = 165,
        int $rows = 3,
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
