<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcslTablePartOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ECSL_Registration_Form', function (Blueprint $table) {
        $table->increments('id');
        $table->string('contact_phone', 60)->nullable();
        $table->string('emergency_contact_name', 100)->nullable();
        $table->string('emergency_contact_phone', 60)->nullable();
        $table->string('passport', 60)->nullable();
        $table->string('country', 60)->nullable();
        $table->string('district', 60)->nullable();
        $table->string('state', 60)->nullable();
        $table->string('shirt_size', 10)->nullable();
        $table->date('birth_date')->nullable();
        $table->string('gender', 60)->nullable();
        $table->string('custom_gender', 60)->nullable();
        $table->string('institution', 100)->nullable();
        $table->text('health_condition')->nullable();
        $table->text('specific_needs')->nullable();
        $table->boolean('is_vegetarian')->default(false);
        $table->boolean('is_gender_visible')->default(false);
        $table->boolean('is_general_information_visible')->default(false);
        $table->boolean('is_photo_visible')->default(false);

        $table->boolean('participated_in_ecsl2009')->default(false);
        $table->boolean('participated_in_ecsl2010')->default(false);
        $table->boolean('participated_in_ecsl2011')->default(false);
        $table->boolean('participated_in_ecsl2012')->default(false);
        $table->boolean('participated_in_ecsl2013')->default(false);
        $table->boolean('participated_in_ecsl2014')->default(false);
        $table->boolean('participated_in_ecsl2015')->default(false);
        $table->boolean('participated_in_ecsl2016')->default(false);
        $table->boolean('participated_in_ecsl2017')->default(false);
        $table->boolean('is_debian_linux_user')->default(false);
        $table->boolean('is_ubuntu_linux_user')->default(false);
        $table->boolean('is_mint_linux_user')->default(false);
        $table->boolean('is_arch_linux_user')->default(false);
        $table->boolean('is_slackware_linux_user')->default(false);
        $table->boolean('is_opensuse_linux_user')->default(false);
        $table->boolean('is_knoppix_linux_user')->default(false);
        $table->boolean('is_centos_linux_user')->default(false);
        $table->boolean('is_elementary_linux_user')->default(false);
        $table->boolean('is_damn_linux_user')->default(false);
        $table->boolean('is_dream_linux_user')->default(false);
        $table->boolean('is_fedora_linux_user')->default(false);
        $table->boolean('is_gentoo_linux_user')->default(false);
        $table->boolean('is_antergos_linux_user')->default(false);
        $table->string('custom_distribution', 60)->nullable();
        $table->boolean('is_interested_in_competition')->default(false);
        $table->boolean('is_interested_in_social_day')->default(false);

        //foreign Keys
        $table->unsignedInteger('user_id')->index();
        $table->foreign('user_id')->references('id')->on('OCMS_User');
        $table->unsignedInteger('organization_id')->index();

        //timestamps
  			$table->timestamps(); //Adds created_at and updated_at columns
  			$table->softDeletes(); //Adds deleted_at column for soft deletes
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ECSL_Registration_Form');
    }
}
