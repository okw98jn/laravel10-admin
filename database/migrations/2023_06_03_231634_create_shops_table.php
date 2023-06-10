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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('コード');
            $table->string('name')->comment('名前');
            $table->string('zip', 8)->comment('郵便番号');
            $table->string('prefectures')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('address')->comment('番地');
            $table->string('building')->nullable()->comment('建物名');
            $table->string('tel')->comment('電話番号');
            $table->boolean('status')->default(true)->comment('ステータス 1:有効 0:無効');
            $table->softDeletes()->comment('論理削除日');
            $table->timestamps();
            $table->comment('店舗');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
