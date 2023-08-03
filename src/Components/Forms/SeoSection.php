<?php

namespace MartinRo\FilamentSeoMetaTags\Components\Forms;

use Filament\Forms;

class SeoSection
{
    public static function make(string $name = 'SEO Meta Tags')
    {
        return Forms\Components\Section::make($name)
            ->heading($name)
            ->schema([

                Forms\Components\Group::make([
                    SeoTitle::make()->rows(3),
                    SeoDescription::make()->rows(6),
                    SeoRobots::make(),
                ])->relationship('seoMetaTags'),

            ])->collapsed();
    }
}
