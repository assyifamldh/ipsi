<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        $data = [[
            'name' => 'Rekayasa Perangkat Lunak'
        ], [
            'name' => 'Multimedia'
        ], [
            'name' => 'Bisnis Kontruksi dan Bangunan'
        ]];

        foreach ($data as $d) {
            DB::table('department')->insert($d);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('department');
    }
}
