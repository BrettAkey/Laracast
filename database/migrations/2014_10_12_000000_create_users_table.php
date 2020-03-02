<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $data = array(
            array('id'=>'1', 'name'=>'Ms. Emilia Klein', 'email'=> 'edwin.herzog@example.com', 'email_verified_at'=> '2020-03-02 13:01:12',
        'updated_at'=> '2020-03-02 13:01:12', 'created_at'=> '2020-03-01 19:45:33', 
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'remember_token'=>'8Q8g4iD1Hx'),
        array('id'=>'2', 'name'=>'Pat Grant', 'email'=> 'audie47@example.net', 'email_verified_at'=> '2020-03-01 14:01:12',
        'updated_at'=> '2020-03-01 14:01:12', 'created_at'=> '2020-02-22 19:45:33', 
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'remember_token'=>'wJrAL12yWs'));
        User::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
