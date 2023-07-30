<?php

namespace MartinRo\FilamentSeoMetaTags\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishMiddleware extends Command
{
    protected $signature = 'filament-seo-meta-tags:publish-middleware';

    protected $description = 'Publish middleware';

    public function handle()
    {
        $this->comment('Publishing middleware...');

        File::copy(
            realpath(__DIR__.'/../../stubs/AddSeoMetaTagDefaults.stub'),
            app_path('Http/Middleware/AddSeoMetaTagDefaults.php')
        );

        $this->info('Middleware published successfully.');
    }
}
