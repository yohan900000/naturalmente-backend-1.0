<?php

use App\Models\Gamme;
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
        Schema::create('gammes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreignIdFor(Gamme::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gammes');
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeignIdFor(Gamme::class);
        });
    }
};
