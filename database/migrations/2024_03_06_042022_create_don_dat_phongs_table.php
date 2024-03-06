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
        Schema::create('don_dat_phongs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang');
            $table->date('ngay');
            $table->bigInteger('id_khach_hang')->constrained();
            $table->string('payment');
            $table->string('ghi_chu');
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
        Schema::dropIfExists('don_dat_phongs');
    }
};
