<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Adiciona o campo 'phone' à tabela users
     * Corre: php artisan migrate
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Adiciona o campo phone após o campo email (nullable = opcional)
            $table->string('phone', 20)->nullable()->after('email');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
};
