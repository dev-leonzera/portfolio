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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title_en')->after('title')->nullable();
            $table->text('excerpt_en')->after('excerpt')->nullable();
            $table->longText('body_en')->after('body')->nullable();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('title_en')->after('title')->nullable();
            $table->text('description_en')->after('description')->nullable();
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->string('position_en')->after('position')->nullable();
            $table->text('description_en')->after('description')->nullable();
        });

        Schema::table('educations', function (Blueprint $table) {
            $table->string('degree_en')->after('degree')->nullable();
            $table->text('description_en')->after('description')->nullable();
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->string('name_en')->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['title_en', 'excerpt_en', 'body_en']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['title_en', 'description_en']);
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn(['position_en', 'description_en']);
        });

        Schema::table('educations', function (Blueprint $table) {
            $table->dropColumn(['degree_en', 'description_en']);
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn(['name_en']);
        });
    }
};
