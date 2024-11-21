<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->string('infor')->nullable(); // Thêm cột 'infor'
            $table->string('email')->nullable(); // Thêm cột 'email'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('infor'); // Xóa cột 'infor'
            $table->dropColumn('email'); // Xóa cột 'email'
        });
    }
}
