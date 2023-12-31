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
        Schema::create('framing_texts', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->foreignId('gamme_id')->constrained('gammes')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('framing_texts', function (Blueprint $table) {
            $table->dropForeign(['gamme_id']);
        });

        Schema::dropIfExists('framing_text');
    }
};
