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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category_id')->after('id')->nullable();
            $table->string('category_name')->after('category_id')->nullable();
            $table->text('title')->change();
            $table->text('sub_title')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('category_name');
            $table->string('title')->change();
            $table->string('sub_title')->nullable()->change();
        });
    }
};