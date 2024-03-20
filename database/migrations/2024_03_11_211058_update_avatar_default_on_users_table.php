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
        Schema::table('users', function (Blueprint $table) {
            // 既存のカラムのデフォルト値を変更
            $table->string('avatar')->default('user_default.jpg')->change();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        // ロールバック時のデフォルト値を元に戻す
        $table->string('avatar')->default('user_default')->change();
    });
}
};
