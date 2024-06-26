<?php

use App\Models\User;
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
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->string('nameEtablishment');
            $table->string('latitudeEtablishment')->nullable();
            $table->string('longitudeEtablishment')->nullable();
            $table->string('address')->default('');
            $table->json('workers')->nullable();
            $table->json('workingDays')->nullable();
            $table->foreignIdFor(User::class)
                    ->references('id')
                    ->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
