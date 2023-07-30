<?php

namespace MartinRo\FilamentSeoMetaTags\Components\Forms;

use Filament\Forms\Components\Select;

class SeoRobots
{
    public static function make(string $name = 'robots'): Select
    {
        return Select::make($name)
            ->default('index, follow')
            ->options([
                'index, follow' => 'index, follow',
                'noindex, follow' => 'noindex, follow',
                'index, nofollow' => 'index, nofollow',
                'noindex, nofollow' => 'noindex, nofollow',
            ]);
    }
}
