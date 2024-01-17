<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignAdsContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ads_contents', function (Blueprint $table) {
            /*  $table->foreign('ads_categories_id','ads_content_ads_categorie_id_foreign')->references('id')->on('ads_categories');
              $table->foreign('ads_subcategories_id','ads_content_ads_ads_subcategories_id_foreign')->references('id')->on('ads_subcategories');
              $table->foreign('user_id')->references('id','ads_content_user_id_foreign')->on('users');
              $table->foreign('adress_id')->references('id','ads_content_a_adress_id_foreign')->on('adresses');
              */
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads_contents', function (Blueprint $table) {
            /* $table->dropForeign('ads_content_ads_categorie_id_foreign');
            $table->dropForeign('ads_content_ads_ads_subcategories_id_foreign');
            $table->dropForeign('ads_content_user_id_foreign');
            $table->dropForeign('ads_content_a_adress_id_foreign');
            */
        });
    }
}
