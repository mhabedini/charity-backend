<?php

use App\Enums\Religion;
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
            $table->id();
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('religion')->default(Religion::SHIA_MUSLIM->name);
            $table->string('father_name');
            $table->string('national_code')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('education')->nullable();
            $table->string('marital_status')->nullable();
            $table->boolean('is_sadat')->default(false);
            $table->string('job')->nullable();
            $table->foreignId('citizenship');
            $table->bigInteger('citizenship_code')->nullable();
            $table->string('representative')->nullable();
            $table->string('representative_mobile')->nullable();
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('citizenship')->on('countries')->references('id')->restrictOnDelete();
        });
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
