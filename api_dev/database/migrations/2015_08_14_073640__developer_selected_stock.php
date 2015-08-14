<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeveloperSelectedStock extends Migration
{

    protected $_prefix = "developer_";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_developer_selected_stock', function(Blueprint $table){

            $table->increments(id);
            $table->integer($this->_prefix.'id')->unsigned();
            $table->foreign($this->_prefix.'id')->references('id')->on('ikeypass_developer_login')->onDelete('cascade');
            $table->string('stock_symbol')->comment = "that will store developer entered stock symbol";;
            $table->string('current_value')->comment = "will store current value of selected stock symbol";;
            $table->integer('operator_id')->unsigned();
            $table->foreign('operator_id')->references('id')->on('_operation_types')->onDelete('cascade');
            $table->string('custom_value')->comment = "developer cutome value which they will enter for operation";;
            $table->string('result_value')->comment = "here the final result of operation will store";;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
