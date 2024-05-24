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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('image',255);
            $table->text('description');
            $table->float ('price', 5, 2);
            $table->float('weight',5,2);
            $table->date('expiration_date');
            $table->string('country',100);
            $table->string('category');
            $table->integer('quantity')->unsigned();
            $table->string('brand');
            $table->string('packaging');
            $table->string('ingredients',100);
            $table->string('type');
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
        Schema::dropIfExists('products');
    }
};



// PK UniquelD: Un identificatore univoco per ogni prodotto.
// nome string (100): Il nome del prodotto.
// immagine string (255): Un URL che punta all immagine del prodotto.
// prezzo float (5,2): Il prezzo del prodotto.
// descrizione_prodotto text: Una descrizione del prodotto.
// peso float (5,2): Il peso del prodotto in grammi.
// scadenza data: La data di scadenza del prodotto.
// nazionalità string (100): La nazionalità del prodotto.
// categoria (bevande, dolci, alcolici..) strina (100): La categoria del prodotto.
// quantità int unsigned: La quantità di prodotto nel packaging.
// marca string (100): La marca del prodotto.
// packaging string (100): Il tipo di imballaggio del prodotto.
// ingredienti string (100): Gli ingredienti del prodotto.
// tipo (vegano, celiaco): Il tipo di prodotto (vegano, celiaco, ecc.).