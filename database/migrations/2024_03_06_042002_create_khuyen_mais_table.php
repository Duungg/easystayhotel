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
        Schema::create('khuyen_mais', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phong');
            $table->bigInteger('phong_id')->constrained();
            $table->string('ma_giam_gia');
            $table->boolean('loai_gia_gia');
            $table->decimal('gia_tri_giam');
            $table->string('mo_ta');
            $table->bigInteger('so_luong');
            $table->datetimes('ngay_bat_dau');
            $table->datetimes('ngay_ket_thuc');
            $table->string('trang_thai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khuyen_mais');
    }
};
