<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IkeypassDeveloperLogin extends Migration
{

    protected $_prefix = "developer_";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikeypass_developer_login', function(Blueprint $table){

            $table->increments('id');
            $table->string($this->_prefix.'first_name');
            $table->string($this->_prefix.'last_name');
            $table->string($this->_prefix.'email_id')->unique()->comment = $this->_prefix." Email id, used for user login and details recovery";
            $table->integer($this->_prefix.'mobile')->comment = $this->_prefix." mobile no, used for step twoo security";
            $table->timestamp($this->_prefix.'register_at')->comment = $this->_prefix." registeration timestamp";
            $table->boolean($this->_prefix.'email_varify_status')->comment = $this->_prefix." email varificatiosn status";
            $table->boolean($this->_prefix.'status')->coment = $this->_prefix." activation status, active or de-activate";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ikeypass_developer_login');
    }
}
