<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lygSewingOutput', function (Blueprint $table) {
            $table->id();
            $table->date('TrnDate');
            $table->string('OperatorName',50);
            $table->string('StyleCode',50);
            $table->string('SizeName',10);
            $table->string('DestinationCode',20);
            $table->integer('QtyOutput')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lygSewingOutput');
    }
};
