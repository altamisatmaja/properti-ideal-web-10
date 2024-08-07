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
        Schema::create('properti', function (Blueprint $table) {
            $table->increments('id_properti');
            $table->string('nama_properti');
            $table->string('slug');
            $table->text('alamat')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('harga', 20);
            $table->string('latitude',65)->nullable();
            $table->string('longitude',65)->nullable();
            $table->smallInteger('prioritas')->default(0)->nullable();
            $table->enum('status', ['Tersedia', 'Tidak Tersedia', 'Nonaktif'])->default('Tersedia');
            $table->smallInteger('kategori_properti_id')->unsigned();
            $table->smallInteger('kategori_penjualan_id')->unsigned();
            $table->smallInteger('partner_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('kategori_properti_id')->references('id_kategori_properti')->on('kategori_properti')->onDelete('cascade');
            $table->foreign('kategori_penjualan_id')->references('id_kategori_penjualan')->on('kategori_penjualan')->onDelete('cascade');
            $table->foreign('partner_id')->references('id_partner')->on('partner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properti');
    }
};
