<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToEnterpriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enterprises', function (Blueprint $table) {
          $table->string('thumbnail');
          $table->dropColumn('file');
          $table->dropColumn('ext');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enterprises', function (Blueprint $table) {
            //
        });
    }
}
