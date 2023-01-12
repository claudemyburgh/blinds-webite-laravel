<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('sku')->nullable();
            $table->string('cleaning')->nullable();
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->string('pattern')->nullable();
            $table->string('thickness')->nullable();
            $table->string('pattern_width')->nullable();
            $table->string('pattern_height')->nullable();
            $table->boolean('flame_retardant')->default(false);
            $table->boolean('printable')->default(false);
            $table->boolean('popular')->default(false);
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
        Schema::dropIfExists('variants');
    }
};
