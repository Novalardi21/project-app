<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('donation_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->string('address');
            $table->string('hours')->nullable();      // Jam buka
            $table->string('phone')->nullable();      // Nomor telpon
            $table->text('items')->nullable();        // Jenis barang diterima
            $table->text('note')->nullable();         // Catatan tambahan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donation_locations');
    }
};
