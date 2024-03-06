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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_chi_tiet_don')->consstrained();
            $table->string('ten_khach_hang');
            $table->string('phong');
            $table->bigInteger('slg_phong');
            $table->decimal('tien_phong');
            $table->bigInteger('dich_vu_id')->consstrained();
            $table->string('ten_dich_vu');
            $table->bigInteger('slg_dich_vu');
            $table->decimal('tien_dich_vu');
            $table->decimal('tong_tien');
            $table->bigInteger('khuyen_mai');
            $table->decimal('tien_sau_khuyen_mai');
            $table->string('payment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
