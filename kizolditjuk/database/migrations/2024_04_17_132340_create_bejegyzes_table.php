<?php

use App\Models\Bejegyzes;
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
        Schema::create('bejegyzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->string('osztaly_id');
            $table->integer('allapot');
            //$table->timestamps();
        });

        Bejegyzes::create(['tevekenyseg_id' => 2, 'osztaly_id' => 'szf2', 'allapot' => 1]);
        Bejegyzes::create(['tevekenyseg_id' => 2, 'osztaly_id' => 'szf1', 'allapot' => 0]);
        Bejegyzes::create(['tevekenyseg_id' => 4, 'osztaly_id' => 'fszf2', 'allapot' => 1]);
        Bejegyzes::create(['tevekenyseg_id' => 4, 'osztaly_id' => 'fszf', 'allapot' => 0]);
        Bejegyzes::create(['tevekenyseg_id' => 5, 'osztaly_id' => 'szf2', 'allapot' => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzes');
    }
};
