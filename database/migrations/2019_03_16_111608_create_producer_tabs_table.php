<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_tabs', function (Blueprint $table) {
            $table->unsignedBigInteger('producer_id');
            $table->unsignedInteger('tab_id');

            $table->primary(['producer_id', 'tab_id']);

            $table->foreign('producer_id')
                ->references('id')
                ->on('producers')
                ->onDelete('cascade');

            $table->foreign('tab_id')
                ->references('id')
                ->on('tabs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producer_tabs');
    }
}
