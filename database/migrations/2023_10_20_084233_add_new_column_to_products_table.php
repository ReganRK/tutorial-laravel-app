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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id_productdetail')->after('type')->required();
            $table->foreign('id_productdetail')->references('id')->on('productdetails')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // $table->dropForeign('id_productdetail_foreign');
            $table->dropForeign(['id_productdetail']);
            $table->dropColumn('id_productdetail');
        });
    }
};
