<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) { 
           // $table->bigIncrements('lecturer_id'); // Используем bigIncrements для создания столбца 'lecturer_id' с автоинкрементным первичным ключом
            $table->unsignedBigInteger('user_id'); // Добавляем столбец 'user_id' для внешнего ключа
            $table->foreign('user_id')->references('id')->on('users'); // Создаем внешний ключ, связывающий 'user_id' в таблице 'lecturers' с 'id' в таблице 'users'
            $table->integer('personal_discounts'); 
            $table->string('status'); 
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
        Schema::dropIfExists('lecturers');
    }
}
