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
        Schema::create('hospice_providers', function (Blueprint $table) {
            $table->id();
            $table->string('cms_certification');
            $table->string('facility_name');
            $table->text('address_1');
            $table->text('address_2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip_code');
            $table->string('country');
            $table->integer('cms_region');
            $table->string('measure_code');
            $table->string('measure_name');
            $table->integer('score');
            $table->integer('footnote');
            $table->text('measure_date_range');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospice_providers');
    }
};
