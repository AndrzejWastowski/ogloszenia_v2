<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id')->comment('unikatowy identyfikator');
            $table->string('link',100)->comment('czytelny link po którym jest wywoływana storna zamiast id ');
            $table->text('lead')->comment('lead - krótki opis do nagłowka storny, przewaznie o tym co tam sięznajduje');
            $table->text('description')->comment('lead - pełna treść dotycząca danej strony');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
