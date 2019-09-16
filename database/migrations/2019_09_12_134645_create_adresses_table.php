<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_id');
			$table->String('typ');
			$table->string('Anrede');
			$table->string('Name');
			$table->string('Vorname');
			$table->String('ZusatzName')->nullable;
			$table->String('Strasse');
			$table->String('Hausnummer');
			$table->integer('Postleitzahl')->unsigned();
			$table->String('Ortsname');
			$table->string('Land');
			$table->text('Notizen')->nullable;
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
