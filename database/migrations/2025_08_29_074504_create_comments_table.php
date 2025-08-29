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
        Schema::create(config('filamentblog.tables.prefix').'comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId(config('filamentblog.user.foreign_key'));
            $table->foreignId("post_id")
                ->constrained(table: config('filamentblog.tables.prefix').'posts')
                ->cascadeOnDelete();
            $table->text('comment');
            $table->boolean('approved')->default(false);
            $table->dateTime('approved_at')->nullable();
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
        Schema::dropIfExists(config('filamentblog.tables.prefix').'comments');
    }
};
