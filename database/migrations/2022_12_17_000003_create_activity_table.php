<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateActivityTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'activity';

    /**
     * Run the migrations.
     * @table activity
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('activity_name', 45)->nullable();
            $table->string('start_time', 45)->nullable();
            $table->string('final_hour', 45)->nullable();
            $table->date('activity_date')->nullable();
            $table->integer('cultural_rights')->nullable()->unsigned();;
            $table->integer('nac_id')->nullable()->unsigned();
            $table->integer('expertises')->nullable()->unsigned();;

            $table->index(["nac_id"], 'nac_id_idx');

            $table->index(["cultural_rights"], 'cultural_rights_idx');

            $table->index(["expertises"], 'expertises_idx');


            $table->foreign('nac_id', 'nac_id_idx')
                ->references('id')->on('nacs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cultural_rights', 'cultural_rights_idx')
                ->references('id')->on('cultural_rights')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('expertises', 'expertises_idx')
                ->references('id')->on('expertises')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
