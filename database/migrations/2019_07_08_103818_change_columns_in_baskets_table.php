<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsInBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baskets', function (Blueprint $table) {
            $table->unsignedInteger('kind_id')->nullable()->change();
            $table->unsignedInteger('cloth_id')->nullable()->change();
            $table->string('parameters')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baskets', function (Blueprint $table) {
            $table->unsignedInteger('kind_id')->nullable(false)->change();
            $table->unsignedInteger('cloth_id')->nullable(false)->change();
            $table->string('parameters')->nullable(false)->change();
        });
    }
}
