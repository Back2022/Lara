<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
		//$table->integer('employeeNumber');
                $table->increments('employeeNumber'); //INT(10) PK, AN 
                $table->string('lastName',50);
		$table->string('firstName',50);
		$table->string('extension',10);
		$table->string('email',100);
		$table->string('officeCode',10);
		$table->integer('reportsTo')->unsigned()->nullable(); //INT(10) UINT ->default('NULL');
		$table->string('jobTitle',50);
		//$table->primary('employeeNumber');  //već je rjeseno sa INCREMENTS
            $table->timestamps();
            
                                  // FK                 //PK      //Table
               // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('reportsTo')->references('employeeNumber')->on('employees');
            $table->foreign('officeCode')->references('officeCode')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
