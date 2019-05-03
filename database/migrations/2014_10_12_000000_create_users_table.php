<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ( Blueprint $table ) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
          //  $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->string('address');
            //Cashier
            $table->string('stripe_id')->nullable()->collation('utf8mb4_bin');
            $table->string('card_brand')->nullable();
            $table->string('card_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            //Cashier-braintree
   //         $table->string('braintree_id')->nullable();
        //    $table->string('paypal_email')->nullable();
            //need?

            $table->rememberToken();
            $table->timestamps();
        });



        Schema::create('subscriptions', function ( Blueprint $table ) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('stripe_id')->collation('utf8mb4_bin');
            $table->string('stripe_plan');

//            $table->string('braintree_id');
//            $table->string('braintree_plan');

            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('subscriptions');
    }
}
