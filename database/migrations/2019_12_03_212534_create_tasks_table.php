<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Task;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('description');
            $table->dateTime('completed_at')->nullable();
            $table->timestamps();
        });

        $data = array(
            array('title'=> 'Test DB', 'description'=> 'testing migratins and such', 'created_at'=> '2019-12-07 11:43:00', 
            'updated_at'=> '2019-12-08 14:57:35', 'completed_at'=> '2019-12-08 14:57:35','user_id'=>'2'),
            array('title'=> 'Test Posts', 'description'=> 'testing posts and if it pulls the correct data', 'created_at'=> '2019-12-09 13:33:00', 
            'updated_at'=> '2019-12-10 10:35:13', 'completed_at'=> '2019-12-10 10:35:13', 'user_id'=>'1'),
            array('title'=> 'Laracast', 'description'=> 'complete laracast and all tutorials', 'created_at'=> '2019-12-10 09:56:36', 
            'updated_at'=> '2019-12-10 09:56:36', 'completed_at'=>null, 'user_id'=>'2'),
        );
        Task::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
