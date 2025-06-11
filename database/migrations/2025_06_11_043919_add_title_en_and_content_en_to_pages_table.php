<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('title_en')
                ->nullable()
                ->after('content'); // Menambahkan kolom title_en setelah content

            $table->text('content_en')
                ->nullable()
                ->after('title_en'); // Menambahkan kolom content_en setelah title_en
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['title_en', 'content_en']);
        });
    }
};
