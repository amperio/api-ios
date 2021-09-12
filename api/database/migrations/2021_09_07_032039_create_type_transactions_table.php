<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TypeTransaction;
class CreateTypeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        TypeTransaction::insert(
            [
                'name' => 'Deposit',
            ],
            [
                'name' => 'Pay',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_transactions');
    }
}
