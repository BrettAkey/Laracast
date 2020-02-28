<?php

use App\Http\Controllers\PostController;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });

        $data = array(
            array('title'=>'Migration Structure', 'body'=>'A migration class contains two methods: up and down. The up method is used to add new tables, columns, 
            or indexes to your database, while the down method should reverse the operations performed by the up method.', 
            'created_at'=> '2019-12-5 16:50:20', 'updated_at'=> '2019-12-6 17:45:12'),
            array('title'=>'Running Migrations', 'body'=>'To run all of your outstanding migrations, execute the migrate Artisan command.',
            'created_at'=> '2019-12-08 13:45:10', 'updated_at'=> '2019-12-08 13:45:10'),
            array('title'=>'Rolling Back Migrations', 'body'=>'To rollback the latest migration operation, you may use the rollback command. 
            This command rolls back the last "batch" of migrations, which may include multiple migration files.',
            'created_at'=> '2019-12-10 17:42:04', 'updated_at'=> '2019-12-10 17:42:04'),
            array('title'=>'Hello World', 'body'=>'Welcome to the greatest pratice ever.',
            'created_at'=> '2020-02-20 17:42:04', 'updated_at'=> '2020-02-26 13:05:04'),
        );
        Post::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Posts');
    }
}
