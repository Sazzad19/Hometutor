<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
              $table->string('name');
                $table->string('username');
                  $table->string('email');
                    $table->string('photo');
                      $table->string('gender');
                        $table->string('areas');
                          $table->string('educational_qualification');
                            $table->string('experience_of_tuition');
                              $table->integer('current_tuition')->nullable();
                                $table->string('expert_in');
                                  $table->integer('phone_number');
                                    $table->string('password');
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
        Schema::dropIfExists('tutors');
    }
}
