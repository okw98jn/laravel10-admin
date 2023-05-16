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
        Schema::table('admins', function (Blueprint $table) {
            $table->boolean('status')->default(true)->comment('ステータス 1:有効 0:無効');
            $table->tinyInteger('role')->default(0)->comment('権限 0:管理者 1:一般スタッフ');
            $table->softDeletes()->comment('論理削除日');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('role');
            $table->dropSoftDeletes();
        });
    }
};
