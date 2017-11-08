<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoIdColumnInCommentReplies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_replies', function (Blueprint $table) {
            $table->integer('photo_id')->unsigned()->index()->after('comment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_replies', function (Blueprint $table) {
            $table->dropColumn('photo_id');
        });
    }
}
