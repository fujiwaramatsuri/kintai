<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->bigInteger('attendance_id')->unsigend(); # 外部キー
            $table->foreign('attendance_id')->references('id')->on('attendances')->cascadeOnDelete(); # 外部キー制約をつける
            // $table->integer('user_id',)->unsigened();
            // $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete(); # 外部キー制約をつける
            $table->date('date');
            $table->time('rests_strat')->useCurrent()->nullable(); # notnull
            $table->time('rests_end')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rests');
    }
}
