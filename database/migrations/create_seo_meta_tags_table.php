<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('seo_meta_tags')) {
            Schema::create('seo_meta_tags', function (Blueprint $table) {
                $table->id();

                $table->unique(['model_id', 'model_type']);

                $table->morphs('model');

                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->string('robots')->nullable()->default('index, follow');
            });
        }
    }
};
