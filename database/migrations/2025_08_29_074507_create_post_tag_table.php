<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('filamentblog.tables.prefix').'post_'.config('filamentblog.tables.prefix').'tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")
            ->constrained(table: config('filamentblog.tables.prefix').'posts')
            ->cascadeOnDelete();
            $table->foreignId("tag_id")
                ->constrained(table: config('filamentblog.tables.prefix').'tags')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('filamentblog.tables.prefix').'post_'.config('filamentblog.tables.prefix').'tag');
    }
};
