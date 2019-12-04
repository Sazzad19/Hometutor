<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuitions', function (Blueprint $table) {
             $table->increments('id');
              $table->string('s_fullName');
                $table->string('s_gender');
                  $table->string('s_college');
                    $table->string('s_class');
                     $table->string('medium');
                      $table->integer('g_phoneNumber');
              $table->string('g_email');
               $table->integer('s_districts');
                $table->string('s_area');
                $table->string('s_address');
                 $table->string('t_gender');
                    $table->string('t_days');
                     $table->string('t_subject');
                      $table->string('time');
                        $table->integer('t_salary');
                        $table->string('additional_info');
                        $table->integer('guardian_id');
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
        Schema::dropIfExists('tuitions');
    }
}
