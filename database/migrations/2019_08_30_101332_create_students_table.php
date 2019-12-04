<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
             $table->increments('id');
              $table->string('name');
                $table->string('username');
                  $table->string('email');
                    $table->string('photo');
                      $table->string('gender');
                        $table->integer('class');
                          $table->integer('medium');
                            $table->string('educational_institution');
                              $table->string('academic_result');
                                $table->integer('guardian_id')->nullable();
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
        Schema::dropIfExists('students');
    }
}
